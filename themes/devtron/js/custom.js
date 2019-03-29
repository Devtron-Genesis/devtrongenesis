(function($){
  $(document).ready(function() {

  	$('.contact_us_main').parents('.fh5co-section-contact').parent().find('.field__item').addClass('hi');
  	$('#outer-page .field--name-field-paragraph-reference :nth-child(3)').addClass('address_contact_form');
  	
  	// to add current langauge into body as class
  	if ($('#block-languageswitcher ul .en').hasClass('is-active')) {
  		$('body').addClass('language-en');
  	}
  	else {
  		$('body').addClass('language-nb');
  	}

  	// to remove the current language option from the page.
  	$('.language-en li.en.is-active').hide();
  	$('.language-nb li.nb.is-active').hide();

}); /* End of the document.ready */
})(jQuery);