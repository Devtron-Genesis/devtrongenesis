/* Source and licensing information for the line(s) below can be found at http://devtrongenesys.com/core/modules/ckeditor/js/ckeditor.off-canvas-css-reset.js. */
(function($,CKEDITOR){var convertToOffCanvasCss=function convertToOffCanvasCss(originalCss){var selectorPrefix='#drupal-off-canvas ',skinPath=''+CKEDITOR.basePath+CKEDITOR.skinName+'/',css=originalCss.substring(originalCss.indexOf('*/')+2).trim().replace(/}/g,'}'+selectorPrefix).replace(/,/g,','+selectorPrefix).replace(/url\(/g,skinPath);return''+selectorPrefix+css},insertCss=function insertCss(cssToInsert){var offCanvasCss=document.createElement('style');offCanvasCss.innerHTML=cssToInsert;offCanvasCss.setAttribute('id','ckeditor-off-canvas-reset');document.body.appendChild(offCanvasCss)},addCkeditorOffCanvasCss=function addCkeditorOffCanvasCss(){if(document.getElementById('ckeditor-off-canvas-reset'))return;CKEDITOR.skinName=CKEDITOR.skin.name;var editorCssPath=CKEDITOR.skin.getPath('editor'),dialogCssPath=CKEDITOR.skin.getPath('dialog'),storedOffCanvasCss=window.localStorage.getItem('Drupal.off-canvas.css.'+editorCssPath+dialogCssPath);if(storedOffCanvasCss){insertCss(storedOffCanvasCss);return};$.when($.get(editorCssPath),$.get(dialogCssPath)).done(function(editorCss,dialogCss){var offCanvasEditorCss=convertToOffCanvasCss(editorCss[0]),offCanvasDialogCss=convertToOffCanvasCss(dialogCss[0]),cssToInsert='#drupal-off-canvas .cke_inner * {background: transparent;}\n          '+offCanvasEditorCss+'\n          '+offCanvasDialogCss;insertCss(cssToInsert);if(CKEDITOR.timestamp&&editorCssPath.indexOf(CKEDITOR.timestamp)!==-1&&dialogCssPath.indexOf(CKEDITOR.timestamp)!==-1)window.localStorage.setItem('Drupal.off-canvas.css.'+editorCssPath+dialogCssPath,cssToInsert)})};addCkeditorOffCanvasCss()})(jQuery,CKEDITOR)
/* Source and licensing information for the above line(s) can be found at http://devtrongenesys.com/core/modules/ckeditor/js/ckeditor.off-canvas-css-reset.js. */