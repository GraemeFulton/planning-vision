(function($){

	if( typeof QTags !== 'undefined' )
	{
		var qt_cb = function(name){
			return function(){
				tinyMCE.execCommand(name + '_cmd');
			}
		}
		for (var i = 0; i < vafpress_sg.length; i++) {
			QTags.addButton( vafpress_sg[i].name, 'Vafpress', qt_cb(vafpress_sg[i].name), '', '', vafpress_sg[i].button_title, 999999 );
		}
	}

})(jQuery);