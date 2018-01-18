<?php 

$anchro_bg_text = '';

if(get_post_meta( $post->ID, 'background_text', true )!= ''){
	$anchro_bg_text = get_post_meta( $post->ID, 'background_text', true );
}

if($anchro_bg_text!=''):
?>

<div class="slider">
	<div class="fullwidthbanner-container">
		<div class="fullwidthbanner">
			<?php echo apply_filters( 'the_content', $anchro_bg_text );?>
		</div>
	</div>
</div>
<?php endif; ?>



		
		

