/* Source and licensing information for the line(s) below can be found at http://devtrongenesys.com/core/modules/toolbar/js/escapeAdmin.js. */
(function($,Drupal,drupalSettings){var pathInfo=drupalSettings.path,escapeAdminPath=sessionStorage.getItem('escapeAdminPath'),windowLocation=window.location;if(!pathInfo.currentPathIsAdmin&&!/destination=/.test(windowLocation.search))sessionStorage.setItem('escapeAdminPath',windowLocation);Drupal.behaviors.escapeAdmin={attach:function attach(){var $toolbarEscape=$('[data-toolbar-escape-admin]').once('escapeAdmin');if($toolbarEscape.length&&pathInfo.currentPathIsAdmin)if(escapeAdminPath!==null){$toolbarEscape.attr('href',escapeAdminPath)}else $toolbarEscape.text(Drupal.t('Home'))}}})(jQuery,Drupal,drupalSettings)
/* Source and licensing information for the above line(s) can be found at http://devtrongenesys.com/core/modules/toolbar/js/escapeAdmin.js. */