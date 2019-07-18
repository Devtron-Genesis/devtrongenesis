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



     // Services pages styling 
    $('.field--name-field-services-sections .paragraph--type--left-image-right-text').addClass('row');
    $('.field--name-field-left-image').addClass('col-md-6');
    $('.field--name-field-right-text').addClass('col-md-6');

    $('.field--name-field-services-sections .paragraph--type--left-text-right-image').addClass('row');
    $('.field--name-field-left-text').addClass('col-md-6');
    $('.field--name-field-right-image').addClass('col-md-6');

  	


    // to remove the current language option from the page.
  	$('.language-en li.en.is-active').hide();
  	$('.language-nb li.nb.is-active').hide();

    $('.our_services_main .field__item > div').matchHeight();// services page
    $('.node-22 p.address_contact_form').matchHeight(); 
    // $('.node-22 .views-field-nothing span > .item').matchHeight(); // blogs page
    $('.node-22 .views-field-nothing img').matchHeight();

    $('.navbar-toggler.collapsed').rotate({angle:45});




}); /* End of the document.ready */
})(jQuery);