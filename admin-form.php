<style type="text/css" media="screen">
	.title {
		font-weight:bold;
	}
	blockquote{
		width:500px;
		padding:10px; margin:0 20px;
		background:#FFFFFF;
		line-height:1.5em;
	}
	blockquote span {
		display:block;
		font-weight:bold;
	}
	input {
		border:1px solid #464646;
	}
</style>
<h2>CRM Lead From</h2>

<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>
<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="crm_url,crm_user_id,crm_campaign_id,crm_permissions,crm_lead_form_company,crm_lead_form_personal_msg,crm_lead_form_email,crm_lead_form_phone,crm_lead_form_website" />


<div id="url">
	<p class="title">CRM URL(required):
	<input type="text" name="crm_url" value="<?php echo get_option('crm_url'); ?>" size="75"/> </p>
	<blockquote>The URL of your CRM. Make sure to include "/leads" and the API token of one user who has access to create leads. Generally something like: <span>http://yourcrm.com/leads?token=123xyz</span>
	</blockquote>
	
</div>

<div id="campaign">
	<p class="title">Campaign ID:  
	<input type="text" name="crm_campaign_id" value="<?php echo get_option('crm_campaign_id'); ?>" size="3"/> </p>
	<blockquote>Add the ID of the campaign you would like to associate this lead with. You can find the ID of the each campaign
		by logging into your crm, clicking the campaign and looking in the upper right hand corner <br>
		<img src='<?php echo show_img("campaign_id.png"); ?>' alt="campaign img" />
	</blockquote>
</div>

<div id="user_id">
	<p class="title"> User ID: <input type="text" name="crm_user_id" value="<?php echo get_option('crm_user_id'); ?>" size="3"/></p>
	<blockquote>Add the ID of the User you'd like to associate the lead with. The user ID can be found by clicking the profile of the user you want to associate with this lead. The profile link is at the top of the page on the right.
	<img src='<?php echo show_img("user_id.png"); ?>' alt="campaign img" />
	</blockquote>
</div>


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