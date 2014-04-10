/************************************************
			FUNCTIONS
************************************************/
var id;
var error;
var default_val;
var input_fields = jQuery("#contact-form").serializeArray();

function validatefield(id, default_val){
	var string_required = jQuery('#'+id+'[class*=required]').val();
	var string_not_required = jQuery('#'+id+':not([class*=required])').val();
	if(string_required == default_val){
		jQuery('#'+id).css('color', '#E11834');
		jQuery('#'+id).val(default_val);
		jQuery('#'+id).focus(function(){
			if(jQuery('#'+id).val() == default_val){ jQuery('#'+id).val(''); }
		});
		error = true;
	}
	if($('#emailaddress').val() != ''){ error = true; }
	if(string_not_required == default_val && error == false){
		jQuery('#'+id).val('');
	}
}

function ajaxFire(){
	error = false;
	jQuery.each(input_fields, function(i, field){
		var field_val = field.value;
		var field_name = field.name;
		var field_id = jQuery('[name="' + field_name + '"]').attr("id");
		validatefield(field_id, field_val);
	});

	if(error == true){
		return false;
	} else {
		if ($('#emailaddress').val() == ''){
			jQuery('#contact-form').submit();
		}
	}
}

/************************************************
			SCRIPT
************************************************/
jQuery(document).ready(function(){
	var thisdate = Date();
	jQuery('#currentTime').val(thisdate);
	
	jQuery('#content-top').css( "background-size", "cover" );

	jQuery('#contact-form :input').each(function() {

		var default_value = this.value;
		jQuery(this).focus(function() {
			if (this.value == default_value) {
				this.value = '';
				jQuery(this).css('color', '#000');
			}
		});
		jQuery(this).blur(function() {
			if (this.value == '') {
				this.value = default_value;
				jQuery(this).css('color', '#9A9A9A');
			}
		});
	});

	jQuery("#request").click(function(){
		ajaxFire();
		return false;
	});

	jQuery(".radio-atty").click(function(){
		jQuery('#otherText').hide();
	});
	
	jQuery("#prof3").click(function(){
		jQuery('#otherText').show();
	});


	jQuery('#mobile-form').click(function(){
		jQuery('#form-wrapper').delay(500).show("slide", { direction: "down" }, 600);
		jQuery('#announcements, #nav, #header, #content, #mobile-form').fadeOut(800);
	});

	jQuery('.close-box').click(function(){
		jQuery('#form-wrapper').hide("slide", { direction: "down" }, 600);
		jQuery('#nav, #header, #content, #mobile-form').delay(500).fadeIn(800);
	});

});

