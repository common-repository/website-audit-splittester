=== Plugin Name ===
Contributors: Peter Knight
Donate link: http://www.thewebsiteaudit.com
Tags: splittesting,analytics,split testing
Requires at least: 2.9
Tested up to: 2.9.1
Stable tag: 0.1

Adds a conditional statement for splittesting uses. In combination with the widget logic plugin you can easily splittest widgets. With theme editing you can splittest any element.

== Description ==

This plugin is being developed to make splittesting elements of your wordpress blog very easy. At the moment there is basic functionality: you are provided with a conditional function. A random number is generated, depending on the number a condition is true or false, if true the code wrapped within the code will be executed, otherwise it won't. 

This plugin was created because I wanted an easy way to splittest widgets and page layouts.

Extended functionality is on it's way (but not there yet). An analytics version is being tested and developed that will make tracking splittesting results with google analytics very easy. No need for google weboptimizer.

Eventually I want to make split testing very easy to do without the need for coding. This is a great start. Enjoy!

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. You can use the conditional tag is_splittest('1') or is_splittest('2') in your themefiles, through the widget logic plugin and in combination with other conditional statements to test any element on the page. 

== Frequently Asked Questions ==

= What can this plugin be used for? =

To test the performance, placements and design of your wordpress website. 

= Where can I get support? =

For support: 
http://www.thewebsiteaudit.com/


== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the directory of the stable readme.txt, so in this case, `/tags/4.3/screenshot-1.png` (or jpg, jpeg, gif)
2. This is the second screen shot

== Changelog ==

= 0.1 =
* Alpha Version of the plugin 02/07/2010 02:41

== Future Improvements ==

Future improvements:
Google Analytics integration (using asynchronous code and custom variables)
Configurable options and settings page