/* Source and licensing information for the line(s) below can be found at http://devtrongenesys.com/core/modules/toolbar/js/views/MenuVisualView.js. */
(function($,Backbone,Drupal){Drupal.toolbar.MenuVisualView=Backbone.View.extend({initialize:function initialize(){this.listenTo(this.model,'change:subtrees',this.render)},render:function render(){var _this=this,subtrees=this.model.get('subtrees');Object.keys(subtrees||{}).forEach(function(id){_this.$el.find('#toolbar-link-'+id).once('toolbar-subtrees').after(subtrees[id])});if('drupalToolbarMenu'in $.fn)this.$el.children('.toolbar-menu').drupalToolbarMenu()}})})(jQuery,Backbone,Drupal)
/* Source and licensing information for the above line(s) can be found at http://devtrongenesys.com/core/modules/toolbar/js/views/MenuVisualView.js. */