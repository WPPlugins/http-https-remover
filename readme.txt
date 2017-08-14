=== HTTP / HTTPS Remover ===
Contributors: condacore
Donate link: https://www.paypal.me/MariusBolik
Tags: http, https, mixed content
Requires at least: 3.0.1
Tested up to: 4.7.4
Stable tag: 1.5.3
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

A fix for mixed content! This Plugin removes HTTP and HTTPS protocols from all links. Works in Front- and Backend!

== Description ==

Main features:

* Works in Front- and Backend
* Makes every Plugin compatible with https
* No Setup needed
* Compatible with Visual Composer
* Fixes Google Fonts issues
* Makes your website faster

= What does this Plugin do? =

Links with "http://" extensions need to change to contain the “s” part of HTTP protocol (https://) pointing out to an SSL-reserved port. A more elegant way of handling different protocols is to have only slashes where port is expected "//". so that page can use the protocol used to open the page itself:
1. If page was loaded via http links with "//", it will be transformed to http://
1. If page was loaded via https links with "//", it will be ultimately transformed to https://
 
Of course, this only applies to links that are loading content from your own domain, Google Fonts and other Google APIs. Your users are counting on you to protect them when they visit your website. It is important to fix your mixed content issues to protect all your visitors, including those on older browsers. And that's what this plugin does!

= What is Mixed Content? =

**Mixed content** occurs when initial HTML is loaded over a secure HTTPS connection, but other resources (such as images, videos, stylesheets, scripts) are loaded over an insecure HTTP connection. This is called mixed content because both HTTP and HTTPS content are being loaded to display the same page, and the initial request was secure over HTTPS. Modern browsers display warnings about this type of content to indicate to the user that this page contains insecure resources.

**Note: You should always protect all of your websites with HTTPS, even if they don’t handle sensitive communications.**

= Example =

Without Plugin:
`src="http://domain.com/script01.js"
src="https://domain.com/script02.js"
src="//domain.com/script03.js"`

With Plugin:
`src="//domain.com/script01.js"
src="//domain.com/script02.js"
src="//domain.com/script03.js"`

= If using CloudFlare or other Caching Plugin =

**If using CloudFlare Plugin:**
1. Go to Settings -> CloudFlare -> More Settings
2. Disable "Automatic HTTPS Rewrites" (Our Plugin is better) :)
3. Go back to "Home" in CloudFlare Plugin and click "Purge Cache" for the changes to take effect!

**Other Cache Plugin:**
If the plugin isn't working like expected please purge/clear cache for the changes to take effect!

For more info visit us at [condacore.com](https://condacore.com/ "CONDACORE Website")

== Installation ==

1. Upload `http-https-remover` folder to your `/wp-content/plugins/` directory.
2. Activate the plugin from Admin > Plugins menu.
3. Once activated your site is ready!

== Frequently Asked Questions ==

= How do I know if my site has mixed content? =

If a green padlock appears, then your site is secure with no mixed content.
In Chrome or Safari, there will be **no padlock** icon in the browser URL field with mixed content.
In Firefox the padlock icon will reflect a warning with mixed content.

= What if I am using a CDN? =

Change all your CDN references to load with https://
Change all your CDN references to load with // (this will adapt based on how the page is loaded)

== Screenshots ==

1. The Sourcecode of the Website will look like this!

== Changelog ==

= 1.5.3 =
*Release Date - 28 April 2017*

* Fixed some Google API Issues

= 1.5.2 =
*Release Date - 26 April 2017*

* Improvements
 
= 1.5.1 =
*Release Date - 25 April 2017*

* Fixed a reCAPTCHA issue!

= 1.5 =
*Release Date - 25 April 2017*

* Now it removes http and https from source code again
* Fixed broken links in social sharing plugins
 
= 1.4 =
*Release Date - 02 March 2017*

* Finally fixed srcset Problems
* Changed the working method of the Plugin
* Some other bugfixes
 
= 1.3.1 =
*Release Date - 13 January 2017*

* Added support for srcset tag
 
= 1.3 =
*Release Date - 07 January 2017*

* Fixed the issue that Twitter card image is not displayed
 
= 1.2 =
*Release Date - 11 December 2016*

* Added support for Google (Fonts, Ajax, Maps etc.)
* Compatibility for Wordpress 4.7
 
= 1.1.1 =
*Release Date - 18 October 2016*

* Added support for "content" tag
* Added support for "loaderUrl" tag
 
= 1.1 =
*Release Date - 17 October 2016*

* Fixed the issue that videos in Revolution Slider stopped playing
* The plugin now works on backend too
* Other small changes

= 1.0 =
*Release Date - 16 October 2016*

* Initial release

== Upgrade Notice ==

= 1.5.3 =
*Release Date - 28 April 2017*

* Fixed some Google API Issues

= 1.5.2 =
*Release Date - 26 April 2017*

* Improvements
 
= 1.5.1 =
*Release Date - 25 April 2017*

* Fixed a reCAPTCHA issue!

= 1.5 =
*Release Date - 25 April 2017*

* Now it removes http and https from source code again
* Fixed broken links in social sharing plugins
 
= 1.4 =
*Release Date - 02 March 2017*

* Finally fixed srcset Problems
* Changed the working method of the Plugin
* Some other bugfixes
 
= 1.3.1 =
*Release Date - 13 January 2017*

* Added support for srcset tag
 
= 1.3 =
*Release Date - 07 January 2017*

* Fixed the issue that Twitter card image is not displayed
 
= 1.2 =
*Release Date - 11 December 2016*

* Added support for Google (Fonts, Ajax, Maps etc.)
* Compatibility for Wordpress 4.7
 
= 1.1.1 =
*Release Date - 18 October 2016*

* Added support for "content" tag
* Added support for "loaderUrl" tag
 
= 1.1 =
*Release Date - 17 October 2016*

* Fixed the issue that videos in Revolution Slider stopped playing
* The plugin now works on backend too
* Other small changes

= 1.0 =
*Release Date - 16 October 2016*

* Initial release
