/* Source and licensing information for the line(s) below can be found at http://devtrongenesys.com/core/modules/block/js/block.admin.js. */
(function($,Drupal,debounce){Drupal.behaviors.blockFilterByText={attach:function attach(context,settings){var $input=$('input.block-filter-text').once('block-filter-text'),$table=$($input.attr('data-element')),$filterRows=void(0)
function filterBlockList(e){var query=$(e.target).val().toLowerCase()
function toggleBlockEntry(index,label){var $label=$(label),$row=$label.parent().parent(),textMatch=$label.text().toLowerCase().indexOf(query)!==-1;$row.toggle(textMatch)};if(query.length>=2){$filterRows.each(toggleBlockEntry);Drupal.announce(Drupal.formatPlural($table.find('tr:visible').length-1,'1 block is available in the modified list.','@count blocks are available in the modified list.'))}else $filterRows.each(function(index){$(this).parent().parent().show()})};if($table.length){$filterRows=$table.find('div.block-filter-text-source');$input.on('keyup',debounce(filterBlockList,200))}}};Drupal.behaviors.blockHighlightPlacement={attach:function attach(context,settings){if(settings.blockPlacement&&$('.js-block-placed').length)$(context).find('[data-drupal-selector="edit-blocks"]').once('block-highlight').each(function(){var $container=$(this);$('html, body').animate({scrollTop:$('.js-block-placed').offset().top-$container.offset().top+$container.scrollTop()},500)})}}})(jQuery,Drupal,Drupal.debounce)
/* Source and licensing information for the above line(s) can be found at http://devtrongenesys.com/core/modules/block/js/block.admin.js. */