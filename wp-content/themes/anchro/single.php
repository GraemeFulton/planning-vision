<?php 
/*
 * Template Name: Page (Post style)
 * Description: Create the famous One Page site with multiple sections and jump-to-section navigation
 */
 get_header();

 if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		$anchro_title_post = get_the_title();
		if($anchro_title_post==""){
			$anchro_title_post = '(Untitled)';
		}
		
		$anchro_subtitle_post = "";
		if(get_post_meta( $post->ID, 'subtitle_post', true )!= ''){
		$anchro_subtitle_post = get_post_meta( $post->ID, 'subtitle_post', true );
		}
		$anchro_desc_post = "";
		if(get_post_meta( $post->ID, 'desc_post', true )!= ''){
		$anchro_desc_post = get_post_meta( $post->ID, 'desc_post', true );
		}
		
		
		if(anchro_option('title_if_nosubtitle')){
			$anchro_subtitle_post = $anchro_title_post;			
		}
		
		$anchro_has_thumb = '';
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


  <!-- General Container -->
<section class="single-blog-page">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div <?php post_class('blog-post') ?>>
					<div class="row">
						<div class="col-md-12">
							<div class="blog-item">
	
								<!-- featured image -->
								<?php if(anchro_option('auto_thumbnail_post') && has_post_thumbnail()):
								$anchro_has_thumb = 'loop_post_has_thumb';
								?>							
								<a href="<?php the_permalink() ?>">
								<?php the_post_thumbnail('anchro_blog-post-thumbnail') ?>
								</a>								
								<?php endif; ?>
						
								<div class="text-content <?php echo esc_attr($anchro_has_thumb) ?>">
									<?php if($anchro_subtitle_post != ""): ?>
									<!-- subtitle post -->
									<a href="<?php the_permalink() ?>" class="subtitle-post"><h4 ><?php echo esc_html($anchro_subtitle_post) ?></h4></a>
									<?php endif; ?>
									<span class="metases"><?php
									if(anchro_option('show_tag')){
									$posttags = get_the_tags();
									$count=0;
									if ($posttags) {
									  foreach($posttags as $tag) {
										$count++;
										if (1 == $count) {
										  echo esc_html($tag->name).' / ';
										}
									  }
									}
									}
									
									if(anchro_option('show_category')){
										$category = get_the_category();
										if(isset($category[0])){
										echo esc_html($category[0]->cat_name).' / ';
										}
									}
									?><?php the_time(esc_html__('F j, Y','anchro')) ?> </span>
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
								
								
								<div class="direction">
									<ul>
										
										<?php previous_post_link('<li><div class="black-button">%link</div></li>',esc_html__('Prev Post','anchro')); ?> 
										
										<li>

										<?php
										get_template_part( 'widgets/share-post');
										?>
											
										</li>
										<?php next_post_link('<li><div class="accent-button">%link</div></li>',esc_html__('Next Post','anchro')); ?> 
											
									</ul>
								</div>
												
												
							</div>
						</div><!-- div 12 end -->
						

						<?php comments_template() ?>
						
						
						
						
						
						
					</div><!-- blog col end -->
				</div>
			</div>
			<?php get_sidebar() ?>
		</div>
	</div>
</section>
				
<?php if(anchro_option('banner_in_post')){showCallAction();} ?>


<?php endwhile; ?>
 <?php endif; ?> 
 <?php get_footer() ?>

