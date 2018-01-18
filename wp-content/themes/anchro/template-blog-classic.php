<?php 

 get_header();
 
 $anchro_has_thumb = 'has_not_thumbnail';

?>


<section class="heading-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php 
						if(is_archive()) {
							anchro_show_archive();
						}elseif(is_search()){
							anchro_show_search();
						}else{
							echo esc_attr(anchro_option('label_blog'));
						} ?></h1>
				<span><?php echo esc_attr(anchro_option('blog_desc')) ?></span>
			</div>
		</div>
	</div>
</section>



  
  <!-- General Container -->
<section class="classic-blog-page">
	<div class="container">
		<div class="row">
			<div class="col-md-8 main-block">
				<div class="blog-posts">
					<div class="row">
				
					
 
 
						<?php
						if ( have_posts() ) :
						while ( have_posts() ) : the_post();
						$anchro_title_post = get_the_title();
						if($anchro_title_post==""){
							$anchro_title_post = '(Untitled)';
						}
					
						
						$anchro_semi_sticky = false;
						if(is_sticky()&&anchro_option('auto_thumbnail') && !has_post_thumbnail()){
						$anchro_semi_sticky = true;
						}
					
						?>
						<?php if(is_sticky()&&anchro_option('auto_thumbnail') && has_post_thumbnail()):
						
						?>						
						<div class="col-md-12">
											<div class="featured-blog-post hidden-sm hidden-xs">
						<?php else: ?>
						<div class="col-md-12">
							<div class="blog-item">
						<?php endif; ?>
	
								<!-- featured image -->
								<?php 
								if(anchro_option('auto_thumbnail') && has_post_thumbnail()):
								$anchro_has_thumb = 'loop_post_has_thumb';
								?>							
								<a class="the_thumb_loop" href="<?php the_permalink() ?>">
								<?php the_post_thumbnail('anchro_blog-post-thumbnail') ?>
								</a>								
								<?php endif; ?>
						
								<div class="text-content <?php echo esc_attr($anchro_has_thumb) ?>">
									<a class="title-post-loop" href="<?php the_permalink() ?>">
										<h4><?php echo esc_html($anchro_title_post);
										if($anchro_semi_sticky){
										?>
										<span class="sticky_label"><?php echo esc_html(anchro_option('sticky_label')) ?><i class="fa fa-chevron-right"></i></span>
										<?php 
										}?>
										</h4>
									</a>
									<span class="metases"><?php
									$anchro_category = get_the_category();
									
									if(isset($anchro_category[0])){
									echo esc_html($anchro_category[0]->cat_name).' /';
									}
									?> <?php the_time(esc_html__('F j, Y','anchro')) ?> </span>
									<div class="blog-item-excerpt body-post">
									<?php 
										$anchro_word_limit = anchro_option('word_limit');
										$anchro_full_content = get_the_content('');
										$anchro_words = explode(" ",$anchro_full_content);
										$anchro_post_content =  implode(" ",array_splice($anchro_words,0,$anchro_word_limit));
										
										echo apply_filters( 'the_content', $anchro_post_content.'...'); 
												
										wp_link_pages( array(
											'before'      => '<div class="pagination"><div class="navigate-page"><span class="page-links-title">' . esc_html__( 'Pages:', 'anchro' ) . '</span>',
											'after'       => '</div></div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
									<a class="read-more" href="<?php the_permalink() ?>"><?php echo esc_html(anchro_option('read_more_label')) ?></a>
									</div>
								</div>
							</div>
						</div>
						
						<?php endwhile; ?>
						<?php else: ?>
						<?php esc_html_e('No Posts Found.','anchro') ?>
						<?php endif; ?>
						
						<!-- pagination blog -->
						<div class="col-md-12">
						<?php anchro_pagination()?>
						</div>

					</div><!-- blog col end -->
				</div>
			</div>
			<?php get_sidebar() ?>
		</div>
	</div>
</section>
				
<?php if(anchro_option('banner_in_blog')){showCallAction();} ?>
	
<?php get_footer() ?>
