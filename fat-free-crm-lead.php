<?php /**
Plugin Name: Fat Free CRM Lead Form
Plugin URI: http://www.brycemcdonnell.com/2009/07/fat-free-crm-lead-form/
Description: This is a simple wordpress plugin that takes user input as a form and then consumes a <a href="http://www.fatfreecrm.com/"> fat free crm </a> API to deposit the user input as a lead. It's current state is pretty gross - not very abstracted and depends on <a href="http://www.mootools.net" > mootools </a>  for data validation.
Author: Bryce McDonnell
Version: 0.2
Author URI: http://www.brycemcdonnell.com

Copyright (c) 2009 Bryce McDonnell Enterprises, LLC  (contact at bryce {at} bridgetownint {dot} com)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
**/

?>
<?php
function the_lead_form() {
	include "the-form.php";
}

add_action('admin_menu', 'CRM_lead_form_menu');
add_action('admin_init', 'register_mysettings' );

function CRM_lead_form_menu() {
  add_options_page('My Plugin Options', 'Fat Free CRM Leads', 8, 'fat-free-crm-leads', 'my_plugin_options');
}
function contact_img() {
	return WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__)). "contact.jpg";
}
function register_mysettings() { // whitelist options
  register_setting( 'myoption-group', 'crm_url' );
}
function my_plugin_options() {
	if ($_POST["url"]) {
		update_option("crm_url", strip_tags(stripslashes($_POST["url"])));
	}
  	include "admin-form.php";
}
?>