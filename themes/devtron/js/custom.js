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

    $('.field--name-field-related-services > .field__item').addClass('col-md-3 col-sm-6');
    $('.field--name-field-related-services > .field__item').matchHeight();
    $('.field--name-field-related-services > .field__item img').matchHeight();

    $('.field--name-field-related-services').prepend('<div class="other-service-heading">----------- <img src="/sites/default/files/2019-07/Services.png" /> <span>Our Other services</span> -----------</div>');

   //  var servi_bg_img = $('.field--name-field-banner-image img').attr('src');
  	// $('#fh5co-header').css('background-image', 'url(' + servi_bg_img + ')');


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