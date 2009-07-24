<h2>CRM Lead From</h2>

<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>

<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="crm_url,crm_user_id,crm_campaign_id,crm_permissions,crm_lead_form_company,crm_lead_form_personal_msg,crm_lead_form_email,crm_lead_form_phone,crm_lead_form_website" />

<table width="80%">

<tr valign="top">
<th align="left"> CRM URL <br> <small>(this is where the lead form will post)</small></th>
<td><input type="text" name="crm_url" value="<?php echo get_option('crm_url'); ?>" size="50"/></td>
</tr>

</table>

<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="crm_url" />


<div id="permissions">
	<p class="title"> Permissions for this lead: 
		<select id="crm_permissions" name="crm_permissions">
			<option value="private"> Private </option>
			<option value="public" <?php if(get_option("crm_permissions") == "public") echo "selected=true" ?>> Public </option>
		</select>
	</p>
	<blockquote>You can make this lead visible to only the user specified above or visible to everyone in your company
	</blockquote>
</div>

<div id="fields">
	<p class="title">
		Which fields do you want to show in the contact form: <br>
		<small> For the time being, you should display both email and phone fields. I'm working on a fix, but the validations don't pass unless both fields are present. </small>
	</p>
	<label><input type="checkbox" name="crm_lead_form_email" value="1" id="crm_lead_form_email" <?php if(get_option("crm_lead_form_email") ) echo "checked=true" ?>/> email</label><br>
	<label><input type="checkbox" name="crm_lead_form_phone" value="1" id="crm_lead_form_phone" <?php if(get_option("crm_lead_form_phone") ) echo "checked=true" ?>/> phone</label> <br>
	<label><input type="checkbox" name="crm_lead_form_website" value="1" id="crm_lead_form_website" <?php if(get_option("crm_lead_form_website") ) echo "checked=true" ?>/> website</label><br>
	<label><input type="checkbox" name="crm_lead_form_company" value="1" id="crm_lead_form_company" <?php if(get_option("crm_lead_form_company") ) echo "checked=true" ?>/> company</label> <br>
	<label><input type="checkbox" name="crm_lead_form_personal_msg" value="1" id="crm_lead_form_personal_msg" <?php if(get_option("crm_lead_form_personal_msg") ) echo "checked=true" ?>/> personal message</label> <br>
	
</div>

<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>

</form>
</div>