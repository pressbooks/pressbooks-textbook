=== Textbooks for Pressbooks ===
Contributors: bdolor, aparedes
Donation link: https://github.com/BCcampus/pressbooks-textbook/wiki/Contribution-guidelines
Tags: pressbooks, textbook
Requires at least: 4.9.5
Tested up to: 4.9.6
Stable tag: 4.1.0
Requires PHP: 7
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Textbooks for Pressbooks adds functionality to the Pressbooks plugin to make it easier to author textbooks.

== Description ==
**Textbooks for Pressbooks** adds functionality to Pressbooks to make it easier to author textbooks as well. The features it currently offers are:

* Textbook Theme
* Optional tabbed content (page citations, revision history, book information)
* TinyMCE textbook buttons
* TinyMCE spell check
* Creative Commons license attribution
* Prominent admin buttons (Import, Plugin)
* Annotation functionality
* Download links to openly licensed textbooks, ready to remix.
* A remix 'eco-system' — Search and Import chapters from both local and remote instances of Pressbooks

Textbooks have functional and styling considerations above and beyond regular books. Open textbooks are those that are licensed with a [creative commons license](http://creativecommons.org).
This plugin was built primarily to support the creation, remixing and distribution of open textbooks for the [open textbook project in BC](http://open.bccampus.ca/about-2/).

== Installation ==

IMPORTANT!

You must first install [Pressbooks](https://github.com/pressbooks/pressbooks). This plugin won't work without it.
The Pressbooks github repository is updated frequently. [Stay up to date](https://github.com/pressbooks/pressbooks/tree/master).

Most of the functionality of this plugin, like textbook buttons and annotation, are tied directly to the `Open Textbooks` theme. Network Activate the `Open Textbooks`
theme, then activate at the book level. You'll have access to those features and more.

= Using Git =

1. cd /wp-content/plugins
2. git clone https://github.com/BCcampus/pressbooks-textbook.git
3. Activate the plugin at the network level, through the 'Plugins' menu in WordPress
4. Activate the `Open Textbooks` theme at the network level
5. Activate the `Open Textbooks` theme at the book level.

= OR, go to the WordPress Dashboard =

1. Navigate to the Network Admin -> Plugins
2. Search for 'Textbooks for Pressbooks'
3. Click 'Network Activate'
4. Activate the `Open Textbooks` theme at the network level
5. Activate the `Open Textbooks` theme at the book level.

= OR, upload manually =

1. Upload `pressbooks-textbook` to the `/wp-content/plugins/` directory
2. Activate the plugin at the network level, through the 'Plugins' menu in WordPress
3. Activate the `Open Textbooks` theme at the network level
4. Activate the `Open Textbooks` theme at the book level.

== FAQ ==

= What is an Open Textbook? =

Open Textbooks are open educational resources (OER); they are instructional resources created and shared in ways so that more people have access to them.
That’s a different model than traditionally-copyrighted materials.
OER are defined as “teaching, learning, and research resources that reside in the public domain or have been released under an intellectual property license that permits their free use and re-purposing by others” (Hewlett Foundation).

= How do you make a Textbook 'Open'? =

When creating Open Textbooks and other OERs, we feel it is best to adhere to the five Rs of open education as defined by David Wiley, which are:

1. Retain – i.e. no digital rights management restrictions (DRM), the content is yours to keep, whether you’re the author, instructor or student.
2. Reuse – you are free to use materials in a wide variety of ways without expressly asking permission of the copyright holder.
3. Revise – as an educator, you can adapt, adjust, or modify the content to suit specific purposes and make the materials more relevant to your students. This means making it available in a number of different formats and including source files, where possible.
4. Remix – you or your students can pull together a number of different resources to create something new.
5. Redistribute – you are free to share with others, so they can reuse, remix, improve upon, correct, review or otherwise enjoy your work.

== Screenshots ==

1. Modified home page
2. Search feature
3. Textbook specific buttons with styling maintained throughout export routines
4. Textbook theme
5. Customize your plugin options for each book in your collection

== Changelog ==

See: https://github.com/BCcampus/pressbooks-textbook/commits/master for more detail

= 4.1.0 (2018/06/22) =
* add oembed support for bcc instance of kaltura
* remove candela-citations as a dependency
* adjust positioning of tabs in otb theme
* ensure compatibility with pb 5.3.3
* apply coding standards

= 4.0.5 (2018/06/18) =
* improve dependency mgmt

= 4.0.4 (2018/05/25) =
* improve search and import
* apply coding standards

= 4.0.3 (2018/04/05) =
* update OTB theme to 2.1.2
* fix responsive content area
* blockquote styling

= 4.0.2 (2018/03/15) =
* update OTB theme to 2.1.1
* fix table captions, blockquote, ordered lists, mpdf export

= 4.0.1 (2018/03/12) =
* fix for web view table of contents - props @SteelWagstaff for reporting
* update OTB theme to 2.0.1
* CSS paragraph indents not the default

= 4.0.0 (2018/02/27) =
* compatibility with PB 5
* removing deprecated ccc plugin
* update OTB theme to 2.0.0

= 4.0.0-rc.1 (2018/02/23) =
* Release candidate - compatibility with PB 5

= 3.1.6 (2017/10/31) =
* correction for network and sharing settings - props @greatislander and @steelwagstaff

= 3.1.5 (2017/10/26) =
* oh, lists.
* automatic trigger of scss compile on theme version update
* addition of footer tabs for optional content (including extended citations)
* fix for indent margins on ordered lists
* one time re-activation of api v1
* blockquote formatting consistency for exports
* add phpunit dev dependency for imminent testing
* code clean up, coding standards
* move and update hypothesis plugin to composer dependency
* fix for extraneous blank pages ending up in PDF export
* add special styling for cnx imports

= 3.1.1 (2017/08/04) =
* sup and sup styling fixed
* fix for chapter author placement (thanks @pbstudent and @JackDougherty for reporting)

= 3.1.0 (2017/07/10) =
* compatibility with PB v4.0.0
* updated readme to match relevant functionality - props @greatislander
* updated theme to use metacomponents for forward compatibility - props @greatislander


= 3.0.2.3 (2017/06/15) =
* fix for removed components/structure/index in PB

= 3.0.2.2 (2017/05/03) =
* compatibility with PB v3.9.8.2
* fix error call to undefined method - props @rwestmacott for reporting
* use new PB htmLawed wrapper class - props @greatislander
* add missing param to avoid error - props @greatislander
* add PB version compatibility check

= 3.0.2.1 (2017/04/11) =
* compatibility with PB v3.9.8.1
* navigation arrows fix for open textbook theme - props @greatislander, @steelwagstaff

= 3.0.2 (2017/02/16) =
* compatibility with PB v3.9.7.1
* correct strict standards warning with remote import

= 3.0.1 (2017/01/16) =
* styling improvements to Open Textbook theme
* rely on parent theme template single.php
* adjust theme options to coincide with parent theme

= 3.0 (2017/01/12) =
* updated and sass-ified Open Textbook theme
* full language support for Open Textbook theme
* improved parity between export formats
* requires WP 4.7.1

= 2.8.0 (2016/09/22) =
* works with PB v.3.8.0 (update Pressbooks first)
* migrating redistribute functionality to Pressbooks (tks @greatislander)
* minor styling improvements

= 2.7.1 (2016/09/08) =
* adding google scholar metadata
* updating min WP requirement
* table formatting
* initial migration to sassifying theme
* default theme
* adding textbox styles to exports
* better parity between html and pdf versions

= 2.2.0 (2016/05/05) =
* remove symbiont plugins that have been ported over to PB
* theme clean up
* nested ordered lists
* large table support
* better display of long urls
* non-camel case namespace for PB functions

= 2.1.2 (2016/01/14) =
* remove redundant calls in OTB theme

= 2.1.1 (2016/01/07) =
* requires 4.4.1

= 2.1 (2015/12/22) =
* adding css rule for odt distribute file
* removing link to Book Info page in Settings
* adding proper formatting for warning message
* resolving undefined index notice
* update reference to icon on homepage
* updating homepage code

= 2.0 (2015/10/29) =
* major upgrade to coincide with PB 3.0 release
* updated namespaces

= 1.2.16 (2015/09/16) =
* minimum req WP version bump
* remove font awesome dependency (tks @greatislander)
* migrate MCE Anchor button to PB (tks @greatislander)

= 1.2.15 (2015/08/25) =
* minimum req WP version bump
* fix for periods in titles truncating export filenames

= 1.2.14 (2015/08/10) =
* minor tweaks
* migrating more functionality to PB

= 1.2.13 (2015/07/16) =
* migrating some functionality to PB

= 1.2.11/12 (2015/07/13) =
* fix for download link to mPDF on homepage

= 1.2.10 (2015/07/09) =
* styling change for tables in admin interface
* migration of table functionality to PB

= 1.2.9 (2015/06/22) =
* add style for tight/loose tracking
* left align h3 tags
* support for disabling social media buttons
* bug fix for search and import

= 1.2.8 (2015/05/28) =
* bug fix

= 1.2.7 (2015/05/26) =
* add search and import feature for remote instances of PB

= 1.2.6 (2015/04/21) =
* patch potential xss attack vector
* adding accessibility button to theme
* update pdf export to work with new luther parent theme
* remove automatic theme switch on book creation due to inconsistent behaviour
* fix php notice messages in search and import
* fix syntax error in search and import

= 1.2.5 (2015/03/11) =
* add table cell border to web and print
* fix default theme on new book creation
* add part title to web view
* fix latest exports returning empty on book titles with periods
* stability/logic improvements

= 1.2.3 (2015/01/12) =
* updating ccc documentation
* adding sub/sup buttons to tinymce
* css styles to support Jack!
* add optional (piwik/google) analytics event tracking code
* improvements to textbook download page

= 1.2.2 (2014/10/30) =
* hotfix for inconsistent behaviour on default activation of theme

= 1.2.1 (2014/10/29) =
* changes placement of export files on homepage
* fix for license picker in textbook downloads
* fix for running header in pdf output (thanks Jack!)
* adding default book options on new book creation

= 1.2.0 (2014/10/15) =
* adds ability to enable/disable comments
* modifies term 'chapter' to 'page'
* adds contributing authors to the homepage
* moves location of the plugin settings
* moves location of textbook downloads, for greater access

= 1.1.7 (2014/09/22) =
* adds the ability to search and import chapters from within your own instance of PB

= 1.1.6 (2014/08/27) =
* updating tinymce table plugin to latest version
* updating tinymce spellcheck plugin to latest version

= 1.1.5 (2014/07/22) =
* adding anchor button to TinyMCE
* preserving microdata in post save

= 1.1.4 (2014/07/16) =
* adding more LRMI microdata
* support for PB license module
* CSS updates for export files

= 1.1.3 (2014/06/18) =
* adding LRMI microdata

= 1.1.1 (2014/06/17) =
* adding support for vanilla WP export
* fix early morning spelling error

= 1.1.0 (2014/06/12) =
* adding news feed to admin dashboard
* updating mce table buttons plugin
* dependency injection, caching added to remix tab

= 1.0.9 (2014/05/30) =
* adding copyright description to cover page
* CSS updates for mobile devices

= 1.0.8 (2014/05/06) =
* adding spell check to tinyMCE
* fix for checking active plugins at book level
* disable including license in feeds (for a valid EPUB export)

= 1.0.7 (2014/05/02) =
* fix filtering of root child themes (thanks John!)
* tested up to WP 3.9

= 1.0.6 (2014/04/11) =
* fixing filter function to ameliorate conflicts with already active plugins.

= 1.0.5 (2014/04/04) =
* adding download links to 31 openly licensed textbooks in various digital formats. Remix!

= 1.0.4 (2014/04/03) =
* fixing redistribution of export files option on home page, requires re-setting if previously set

= 1.0.3 (2014/04/01) =
* updating and fixing mce table plugin

= 1.0.2 (2014/03/31) =
* choose which plugins you want to include
* adding tabs to plugin options page

= 1.0.1 (2014/03/18) =
* annotation capabilities
* administration menu page
* Redistribution capabilities for free, digital versions of your book

= 1.0.0 (2014/03/13) =
* initial release

== How to contribute code ==

Pull requests are enthusiastically received **and** scrutinized for quality.

* The best way is to initiate a pull request on [GitHub](https://github.com/BCcampus/pressbooks-textbook).
