
<script type="text/javascript" charset="utf-8">
function validateForm() {
	//Clear Old Errors:
	resetErrors();
	
	var errors = 0;
	//var reqFields = $("contact").getElements('.required');
	//TODO this used to work; no sense in iterating over all the DOM
	var reqFields = $$('.required');
	reqFields.each(function(item, index){
		if (!$(item).value) { 
			displayError(item,  item.name + " is a required field" ); 
			errors++; 
		}
	});
	
	//require either email or phone
	if (!$("email").value && !$("phone").value) {
		displayError($("email"), " you must provide either an email or phone number");
		displayError($("phone"), " you must provide either an email or phone number");
		errors++;
	};
	
	// check the validity of the email address must be one letter, an @ sign a letter, a dot and at least two letters
	// this will catch most fake emails without checking against the MX record
	var emailregex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (!emailregex.test($("email").value) && $("email").value != "") {
		displayError($("email"), " not a valid email address" );
		errors++;
	}
	
	
	if (errors == 0) { $("contact").submit(); };
}
function resetErrors() {
	$("errors").innerHTML = "";
	$(document.body).getElements(".error").each(function(ele, index){
		$(ele).removeClass("error");
	});
}

function displayError(el, msg) {
	//existingError = $("errors").innerHTML;
	//existingError += "<p>"+ msg + "</p>";
	//
	//$("errors").innerHTML = existingError;
	//$("errors").setStyle("display", "");
	//
	$(el).addClass("error");
	
	var err = new Element("p", {'html' : msg, 'class' : 'inlineerror'});
	err.inject($(el), 'after');
}

</script>