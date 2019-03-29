(function($){
  $(document).ready(function() {

  	$('.contact_us_main').parents('.fh5co-section-contact').parent().find('.field__item').addClass('hi');
  	$('#outer-page .field--name-field-paragraph-reference :nth-child(3)').addClass('address_contact_form');
  	// $('body').hasClass('en').addClass('language_en');

  	if ($('#block-languageswitcher ul .en').hasClass('is-active')) {
  		$('body').addClass('language-en');
  	}
  	else {
  		$('body').addClass('language-nb');
  	}

}); /* End of the document.ready */
})(jQuery);