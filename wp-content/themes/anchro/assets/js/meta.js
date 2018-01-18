jQuery(document).ready(function($){
	jQuery('#onepage_metabox').hide();
	jQuery('#normalpage_metabox').hide();
	/*	Page select
	=========================*/
	function changeTemplate(template) {
		if(template == 'template-one-page.php' ) {
			jQuery('#onepage_metabox').show();
			jQuery('#normalpage_metabox').hide();
		} else {
			jQuery('#normalpage_metabox').show();
			jQuery('#onepage_metabox').hide();
		}
		
	}
	
	var currTemplate = jQuery('#page_template').val();
	changeTemplate(currTemplate);
	
	jQuery('#page_template').change(function() {
		var template = jQuery(this).find('option:selected').val();
		changeTemplate(template);
	});
	
	
});