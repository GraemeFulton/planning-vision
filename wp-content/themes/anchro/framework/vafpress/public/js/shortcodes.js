(function($){
	function create(sg)
	{
		tinymce.create('tinymce.plugins.' + sg.name, {
			init: function(ed, url) {
				var cmd_cb = function(name) {
					return function() {
						$('#' + name + '_modal').reveal({ animation: 'none' });
						$('#' + name + '_modal').css('top', parseInt($('#' + name + '_modal').css('top')) - window.scrollY);
						$('#' + name + '_modal').unbind('reveal:close.vafpress_sc');
						$('#' + name + '_modal').bind('reveal:close.vafpress_sc', function () {
							$('.vp-sc-menu-item.active').find('.vp-sc-form').scReset().vafpress_slideUp();
							$('.vp-sc-menu-item.active').removeClass('active');
						});
						$('#' + name + '_modal').unbind('vafpress_insert_shortcode.vafpress_tinymce');
						$('#' + name + '_modal').bind('vafpress_insert_shortcode.vafpress_tinymce', function(event, code) {
							ed.selection.setContent(code);
							$(ed.getElement()).insertAtCaret(code);
						});
					}
				}
				ed.addCommand(sg.name + '_cmd', cmd_cb(sg.name));
				ed.addButton(sg.name, {title: sg.button_title, cmd: sg.name + '_cmd', image: sg.main_image});
			},
			getInfo: function() {
				return {
					longname: 'Vafpress Framework',
					author  : 'Vafpress'
				};
			}
		});
	}

	for (var i = 0; i < vafpress_sg.length; i++){
		create(vafpress_sg[i]);
	}

})(jQuery);

for (var i = 0; i < vafpress_sg.length; i++){
	tinymce.PluginManager.add(vafpress_sg[i].name, tinymce.plugins[vafpress_sg[i].name]);
}
