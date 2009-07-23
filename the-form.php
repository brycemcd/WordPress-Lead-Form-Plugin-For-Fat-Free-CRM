<?php include( "submit-form.php") ?>
<?php include("validations.php") ?>

<style type="text/css" media="screen">
	.error {
		border:2px solid #800000;
	}
	.req, #errors {
		color: #800000;
	}
</style>

<?php if($success): ?>
	<h4 align="center"> Thank You! We will contact you shortly </h4>
<?php else: ?>

<div id="errors"></div>
<form action="" method="post" accept-charset="utf-8" id="contact">
	<span class="req">* = required field</span> 
	<p>
		Your First Name<span class="req">*</span>: <br>
		<input type="text" name="First Name" value="" id="first_name" class="required" />
	</p>
	
	<p>
		Your Last Name<span class="req">*</span> :<br>
		<input type="text" name="Last Name" value="" id="last_name" class="required"/>
	</p>
	
	<p>
		Email Address:<br>
		<input type="text" name="email" value="" id="email" />
	</p>
	
	<p>
		Phone:<br>
		<input type="text" name="phone" value="" id="phone"/>
	</p>
	<p>
		Website:<br>
		<input type="text" name="website" value="" id="website"/>
	</p>
	
	<p>
		Message: <br>
		<textarea name="comment" ></textarea>
	</p>

	<p id="contact-button">
	<input type="image" value="contact" name="contact" id="contact" src="<?= contact_img() ?>" onclick="validateForm(); return false;">
	</p>
</form>
<?php endif; ?>