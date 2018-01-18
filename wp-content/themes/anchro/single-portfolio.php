<?php 

 get_header();

 if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		$anchro_title_post = get_the_title();
		if($anchro_title_post==""){
			$anchro_title_post = '(Untitled)';
		}

		$anchro_desc_post = "";
		if(get_post_meta( $post->ID, 'desc_post', true )!= ''){
		$anchro_desc_post = get_post_meta( $post->ID, 'desc_post', true );
		}		

 ?>
 <section class="heading-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php echo esc_html($anchro_title_post) ?></h1>
				<?php if($anchro_desc_post!=''): ?>
				<span><?php echo esc_html($anchro_desc_post) ?></span>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<section class="project-page">
	<div class="container">	
		<div class="blog-item-excerpt body-post">
		<?php the_content() ?>
		
		
		<?php 
		wp_link_pages( array(
			'before'      => '<div class="pagination"><div class="navigate-page"><span class="page-links-title">' . esc_html__( 'Pages:', 'anchro' ) . '</span>',
			'after'       => '</div></div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
		) );
		?>	
		</div>
	</div>
</section>

				
<?php if(anchro_option('banner_in_portfolio')){showCallAction();} ?>

<?php endwhile; ?>
 <?php endif; ?> 
 <?php get_footer() ?>

