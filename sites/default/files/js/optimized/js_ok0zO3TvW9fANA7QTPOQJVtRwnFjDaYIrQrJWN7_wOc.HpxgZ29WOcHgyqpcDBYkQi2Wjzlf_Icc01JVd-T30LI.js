/* Source and licensing information for the line(s) below can be found at http://devtrongenesys.com/modules/webform/js/webform.form.tabs.js. */
(function($,Drupal){'use strict';Drupal.webform=Drupal.webform||{};Drupal.webform.formTabs=Drupal.webform.formTabs||{};Drupal.webform.formTabs.options=Drupal.webform.formTabs.options||{hide:true,show:true};Drupal.behaviors.webformFormTabs={attach:function(context){$(context).find('div.webform-tabs').once('webform-tabs').each(function(){var $tabs=$(this),options=jQuery.extend({},Drupal.webform.formTabs.options);if(location.hash){var active=$('a[href="'+location.hash+'"]').data('tab-index');if(typeof active!=='undefined'){options.active=active;location.hash=''}};$tabs.tabs(options)})}}})(jQuery,Drupal)
/* Source and licensing information for the above line(s) can be found at http://devtrongenesys.com/modules/webform/js/webform.form.tabs.js. */