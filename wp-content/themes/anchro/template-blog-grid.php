<?php 

 get_header();
 
 $anchro_has_thumb = 'has_not_thumbnail';
 
 
 $anchro_paged = '';
if(get_query_var('paged')){
$anchro_paged = get_query_var('paged');
}elseif(isset($_GET['paged'])){
$anchro_paged = $_GET['paged'];
}elseif($anchro_paged==''){
$anchro_paged = '1';
}

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
<section class="grids-blog-page">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="blog-posts">
									<div class="row">
				
					
 
 
						<?php
						if ( have_posts() ) :
						while ( have_posts() ) : the_post();
						$anchro_title_post = get_the_title();
						if($anchro_title_post==""){
							$anchro_title_post = '(Untitled)';
						}
					
						$anchro_is_sticky = is_sticky()&&($anchro_paged==1);
						$anchro_semi_sticky = !$anchro_is_sticky&&is_sticky();
						$anchro_class_w = 'col-md-8 col-md-offset-2'
					
						?>
						
						<?php if($anchro_is_sticky):?>						
						<div class="col-md-8 col-md-offset-2">
											<div class="featured-blog-post hidden-sm hidden-xs">
						<?php else: ?>
						<div class="col-md-4">
							<div class="blog-item">
						<?php endif; ?>
						<!-- featured image -->
								<?php 
								if((anchro_option('auto_thumbnail') && has_post_thumbnail())||$anchro_is_sticky):
								$anchro_has_thumb = 'loop_post_has_thumb';
								?>							
								<a href="<?php the_permalink() ?>">
								<?php 
								if($anchro_is_sticky):
									if(has_post_thumbnail()){
										the_post_thumbnail('anchro_blog-post-thumbnail');
									}else{
										echo '<img src="'.get_template_directory_uri().'/assets/images/featured-post.png'.'" alt="" />';
									}
								else: 
									the_post_thumbnail('anchro_blog-grid-post-thumbnail');
								endif; ?>
								
								</a>								
								<?php endif; ?>
								<div class="text-content-w">
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
									$category = get_the_category();
									if(isset($category[0])){
									echo esc_html($category[0]->cat_name).' /';
									}
									?> <?php the_time(esc_html__('F j, Y','anchro')) ?> </span>
									<div class="blog-item-excerpt body-post">
									<?php 
										$anchro_word_limit = anchro_option('word_limitb');
										$anchro_full_content = strip_tags(get_the_content(''));
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
									<a class="read-more" href="<?php the_permalink() ?>"><?php echo esc_html__('Continue Reading','anchro') ?></a>
									</div>
								</div>
								</div>
								
							</div>
						</div>
						
					
						<?php endwhile; ?>
						<?php else: ?>
						<?php esc_html_e('No Posts Found.','anchro') ?>
						<?php endif; ?>
						
						<!-- pagination blog -->
						
						<div class="col-md-12 text-center">
						<?php anchro_pagination()?>
						</div>

					</div><!-- blog col end -->
				</div>
			</div>			
		</div>
	</div>
</section>
				
<?php if(anchro_option('banner_in_blog')){showCallAction();} ?>
	
<?php get_footer() ?>
