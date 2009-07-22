<h2>CRM Lead From</h2>

<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>

<table width="80%">

<tr valign="top">
<th align="left"> CRM URL <br> <small>(this is where the lead form will post)</small></th>
<td><input type="text" name="crm_url" value="<?php echo get_option('crm_url'); ?>" size="50"/></td>
</tr>

</table>

<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="crm_url" />

<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>

</form>
</div>