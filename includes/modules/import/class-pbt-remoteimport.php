<?php

/**
 * Uses the v1/API to search titles on a remote system based on a user defined search term
 * Extends the existing Xthml import class used in PressBooks, the only differences being that we 
 * are sending that class more than one url/page to scrape at a time and we need to revoke 
 * the PBT import rather than the PB import.
 * 
 * @package PressBooks_Textbook
 * @author Brad Payne <brad@bradpayne.ca>
 * @license GPL-2.0+
 * 
 * @copyright 2015 Brad Payne
 */

namespace PBT\Import;

use PBT\Search;
use PressBooks\Import\Html;

require WP_PLUGIN_DIR . '/pressbooks/includes/modules/import/class-pb-import.php';
require WP_PLUGIN_DIR . '/pressbooks/includes/modules/import/html/class-pb-xhtml.php';

class RemoteImport extends Html\Xhtml {

	/**
	 * 
	 * @param array $current_import
	 */
	function import( array $current_import ) {
		foreach ( $current_import as $import ) {

			// fetch the remote content
			$html = wp_remote_get( $import['file'] );
			$url = parse_url( $import['file'] );
			// get parent directory (with forward slash e.g. /parent)
			$path = dirname( $url['path'] );

			$domain = $url['scheme'] . '://' . $url['host'] . $path;

			// get id (there will be only one)
			$id = array_keys( $import['chapters'] );

			// front-matter, chapter, or back-matter
			$post_type = ( isset( $import['type'] ) ) ? $import['type'] : $this->determinePostType( $id[0] );
			$chapter_parent = $this->getChapterParent();

			$body = $this->kneadandInsert( $html['body'], $post_type, $chapter_parent, $domain );
		}
		// Done
		return Search\ApiSearch::revokeCurrentImport();
	}

	/**
	 * Cherry pick likely content areas, then cull known, unwanted content areas
	 * 
	 * @param string $html
	 * @return string $html
	 */
	protected function regexSearchReplace( $html ) {

		/* cherry pick likely content areas */
		// HTML5, ungreedy
		preg_match( '/(?:<main[^>]*>)(.*)<\/main>/isU', $html, $matches );
		$html = ( ! empty( $matches[1] )) ? $matches[1] : $html;

		// WP content area, greedy
		preg_match( '/(?:<div id="main"[^>]*>)(.*)<\/div>/is', $html, $matches );
		$html = ( ! empty( $matches[1] )) ? $matches[1] : $html;

		// general content area, greedy
		preg_match( '/(?:<div id="content"[^>]*>)(.*)<\/div>/is', $html, $matches );
		$html = ( ! empty( $matches[1] )) ? $matches[1] : $html;

		// specific PB content area, greedy
		preg_match( '/(?:<div class="entry-content"[^>]*>)(.*)<\/div>/is', $html, $matches );
		$html = ( ! empty( $matches[1] )) ? $matches[1] : $html;

		/* cull */
		// get rid of page authors, we replace them anyways
		$result = preg_replace( '/(?:<h2 class="chapter_author"[^>]*>)(.*)<\/h2>/isU', '', $html );
		// get rid of script tags, ungreedy
		$result = preg_replace( '/(?:<script[^>]*>)(.*)<\/script>/isU', '', $html );
		// get rid of forms, ungreedy
		$result = preg_replace( '/(?:<form[^>]*>)(.*)<\/form>/isU', '', $result );
		// get rid of html5 nav content, ungreedy
		$result = preg_replace( '/(?:<nav[^>]*>)(.*)<\/nav>/isU', '', $result );
		// get rid of PB nav, next/previous
		$result = preg_replace( '/(?:<div class="nav"[^>]*>)(.*)<\/div>/isU', '', $result );
		// get rid of PB share buttons
		$result = preg_replace( '/(?:<div class="share-wrap-single"[^>]*>)(.*)<\/div>/isU', '', $result );
		// get rid of html5 footer content, ungreedy
		$result = preg_replace( '/(?:<footer[^>]*>)(.*)<\/footer>/isU', '', $result );
		// get rid of sidebar content, greedy
		$result = preg_replace( '/(?:<div id="sidebar\d{0,}"[^>]*>)(.*)<\/div>/is', '', $result );
		// get rid of comments, greedy
		$result = preg_replace( '/(?:<div id="comments"[^>]*>)(.*)<\/div>/is', '', $result );

		return $result;
	}

	/**
	 * Compliance with XHTML standards, rid cruft generated by word processors
	 *
	 * @param string $html
	 *
	 * @return string $html
	 */
	protected function tidy( $html ) {

		// Reduce the vulnerability for scripting attacks
		// Make XHTML 1.1 strict using htmlLawed

		$config = array(
		    'comment' => 1,
		    'safe' => 1,
		    'valid_xhtml' => 1,
		    'no_deprecated_attr' => 2,
		    'hook' => '\PressBooks\Sanitize\html5_to_xhtml11',
		);

		return htmLawed( $html, $config );
	}

}