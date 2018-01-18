<?php 

 get_header();

 if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		$title_post = get_the_title();
		if($title_post==""){
			$title_post = '(Untitled)';
		}
		
		
		$desc_post = "";
		if(get_post_meta( $post->ID, 'desc_post', true )!= ''){
		$desc_post = get_post_meta( $post->ID, 'desc_post', true );
		}
		
		
		
		$anchro_has_thumb = '';
		
		$style = '';
		if(get_post_meta( $post->ID, 'custom_bg', true )!= ''){
		$custom_bg = get_post_meta( $post->ID, 'custom_bg', true );		
		$style = 'background-image:url('.esc_url($custom_bg).')';
		}
 ?>
 <section class="heading-page" style="<?php echo esc_attr($style) ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php echo esc_html($title_post) ?></h1>
				<?php if($desc_post!=''): ?>
				<span><?php echo esc_html($desc_post) ?></span>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

  <!-- General Container -->
<section class="single-blog-page single-page-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="blog-post">
					<div class="row">
						<div class="col-md-12">
							<div class="blog-item">
	
								<!-- featured image -->
								<?php if(anchro_option('auto_thumbnail') && has_post_thumbnail()):
								$anchro_has_thumb = 'loop_post_has_thumb';
								?>							
								<a href="<?php the_permalink() ?>">
								<?php the_post_thumbnail('anchro_blog-post-thumbnail') ?>
								</a>								
								<?php endif; ?>
						
								<div class="text-content <?php echo esc_attr($anchro_has_thumb) ?>">
									
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
								
								
								<?php if(anchro_option('social_page')): ?>
								<div class="direction">
									<ul>	
										<li>

										<?php
										get_template_part( 'widgets/share-post');
										?>
											
										</li>
										
									</ul>
								</div>
								<?php endif; ?>	
							</div>
						</div><!-- div 12 end -->
						

						<?php if(is_page() && !anchro_option('h_comments_page')): ?>
						
						<?php comments_template() ?>
						
					<?php endif; ?>
						
						
						
						
						
						
					</div><!-- blog col end -->
				</div>
			</div>
		</div>
	</div>
</section>
				
<?php if(anchro_option('banner_in_pages')){showCallAction();} ?>


<?php endwhile; ?>
 <?php endif; ?> 
 <?php get_footer() ?>
