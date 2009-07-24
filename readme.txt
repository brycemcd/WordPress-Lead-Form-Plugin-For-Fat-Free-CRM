=== Fat Free CRM Lead Form ===
Contributors: brycemcd
Donate link: 
Tags: comments, spam
Requires at least: 2.8
Tested up to: 2.8.0
Stable tag: trunk

A very simple plugin to add a contact form to your WP site that automatically dumps the form submission into your Fat Free CRM

== Description ==

Just add <?php the_lead_form(); ?> anywhere in your page or blog layout files and a simple contact form will be present. When users click the submit button, the data will automatically be entered into your [Fat Free CRM]("http://www.fatfreecrm.com/" "fat free crm link"). This plugin was created out of necessity for some personal and client work I had been doing.

Styling and the fields you show to end users are totally up to you. I'm working to make this plugin as easy to use and integrate as possible.

Currently, it works quite well as long as all requirements are met. I plan to remove a lot of requirements as I continue developing this plugin. The current requirements are [mootools]("http://www.mootools.net") and [my fork of the fat free crm located at github]("http://github.com/brycem/fat_free_crm/tree/master"). 

Fat Free CRM is written in [Ruby on Rails]("http://www.rubyonrails.org") and can be hosted on your servers or on mine for a nominal fee. Please [contact me]("http://www.brycemcdonnell.com/contact/") (uses this plugin ;) ) if you would like to host on my servers.

Fat Free CRM is a great CRM with a user interface similar to [Highrise]("http://www.highrisehq.com") but with many more features.

Use of this plugin works great for new and established businesses using Wordpress for their website and looking to change or implement a CRM solution.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place `<?php the_lead_form(); ?>` in your templates

== Frequently Asked Questions ==

= Does it work with older versions of WP? =

Probably, but I haven't tested them. Create an issue at [the github repo]("http://github.com/brycem/WordPress-Lead-Form-Plugin-For-Fat-Free-CRM/issues") and I'll work in backwards compatibility.

== Screenshots ==

1. Shows how an end user would see the generated contact form
2. Administration is dead simple

== Changelog ==

= 0.1 =
* First iteration of the plugin / submission to the plugin directory