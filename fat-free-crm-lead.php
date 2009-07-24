<?php /**
Plugin Name: Fat Free CRM Lead Form
Plugin URI: http://www.brycemcdonnell.com/fat-free-crm-lead-form
Description: This is a simple wordpress plugin that takes user input as a form and then consumes a <a href="http://www.fatfreecrm.com/"> fat free crm </a> API to deposit the user input as a lead. It's current state is pretty gross - not very abstracted and depends on <a href="http://www.mootools.net" > mootools </a>  for data validation.
Author: Bryce McDonnell
Version: 0.1
Author URI: http://www.brycemcdonnell.com
**/

?>
<?php
#function the_lead_form() {
#	include "the-form.php";
#}
?>

<?php
add_action('admin_menu', 'CRM_lead_form_menu');
add_action('admin_init', 'register_mysettings' );

#function CRM_lead_form_menu() {
#  add_options_page('My Plugin Options', 'Fat Free CRM Leads', 8, 'fat-free-crm-leads', 'my_plugin_options');
#}
#function contact_img() {
#	return WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__)). "contact.jpg";
#}
#function register_mysettings() { // whitelist options
#  register_setting( 'myoption-group', 'crm_url' );
#}
#function my_plugin_options() {
#	if ($_POST["url"]) {
#		update_option("crm_url", strip_tags(stripslashes($_POST["url"])));
#	}
#  	include "admin-form.php";
#}
#?>