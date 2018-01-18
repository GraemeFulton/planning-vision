<?php 


function anchro_projects_carousel_f($limit = -1, $ids=''){

?>
    
	<div id="owl-projects" class="owl-carousel owl-theme">
									
	
		<?php 
		
		
		$myarray = array('1790', '151');
		
		if($ids!=''){
		$args = array( 'post_type' => 'portfolio', 'post__in' => $myarray, 'posts_per_page' => $limit, 'ignore_sticky_posts'=>1);
		
		}else{
		$args = array( 'post_type' => 'portfolio', 'posts_per_page' => $limit, 'ignore_sticky_posts'=>1);
		}
		$loop = new WP_Query( esc_sql($args) );
		
		$pages=0;
		
		
		if($loop->have_posts()):
		while ( $loop->have_posts() ) : $loop->the_post();
		
		?>
			
			<div class="item">
				<div class="project-item">
					<div class="thumb">
						<div class="image">
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('anchro_project-thumbnail') ?></a>
						</div>
					</div>
					<div class="pro-i-text">
					<a href="<?php the_permalink() ?>"><h4><?php echo esc_html(get_the_title()) ?></h4></a>					
					<?php 
					$terms = wp_get_object_terms( get_the_ID(), 'portfolio-category' );
					unset($term_names);
					foreach( $terms as $term ){
						$term_names[] = $term->name;
						$term_name = str_replace(" ","-",$term->name);
					}
					
					if(isset($term_names)){
					$terms_ok = implode( ', ', $term_names );	
					}else{
					$terms_ok = '';
					}
					?>
					<span><?php echo esc_html($terms_ok) ?></span>
					</div>
				</div>
			</div>
		<?php 
		
		endwhile;
		else:
		esc_html_e('No Posts Founds.','anchro');
		endif;
		wp_reset_postdata(); 
		?>
								
	</div>						
				<div class="owl-navigation hidden-sm hidden-xs">
						  <a class="btn prev fa fa-angle-left"></a>
						  <a class="btn next fa fa-angle-right"></a>
						</div>				
<?php 
}



function anchro_projects_grid_f($limit = -1, $ids='',$columns=3){
if($columns==3){
	$col = 4;
}elseif($columns==4){
	$col = 3;
}

?>				
	
		<?php 
		
		
		$myarray = array('1790', '151');
		
		if($ids!=''){
		$args = array( 'post_type' => 'portfolio', 'post__in' => $myarray, 'posts_per_page' => $limit, 'ignore_sticky_posts'=>1);
		
		}else{
		$args = array( 'post_type' => 'portfolio', 'posts_per_page' => -1, 'ignore_sticky_posts'=>1);
		}
		$loop = new WP_Query( esc_sql($args) );
		
		$pages=0;
		
		
		if($loop->have_posts()):
		while ( $loop->have_posts() ) : $loop->the_post();
		
		?>
			<div class="col-md-<?php echo esc_attr($col) ?>">
				<div class="project-item">
					<div class="thumb">
						<div class="image">
						<?php 

							if($columns==3){
								?>
								<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('anchro_project-thumbnailb') ?></a>
								<?php 
							}elseif($columns==4){
								?>
								<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('anchro_blog-grid-post-thumbnail') ?></a>
								<?php 
							}


						?>
							
						</div>
					</div>
					<div class="pro-i-text">
					<a href="<?php the_permalink() ?>"><h4><?php echo esc_html(get_the_title()) ?></h4></a>					
					<?php 
					$terms = wp_get_object_terms( get_the_ID(), 'portfolio-category' );
					unset($term_names);
					foreach( $terms as $term ){
						$term_names[] = $term->name;
						$term_name = str_replace(" ","-",$term->name);
					}
					
					if(isset($term_names)){
					$terms_ok = implode( ', ', $term_names );	
					}else{
					$terms_ok = esc_html__('uncategorized','anchro');
					}
					?>
					<span><?php echo esc_html($terms_ok) ?></span>
					</div>
				</div>
			</div>

			
		<?php 
		
		endwhile;
		else:
		esc_html_e('No Posts Founds.','anchro');
		endif;
		wp_reset_postdata(); 
		?>
			
<?php 
}
 ?>							
								
								
								
								
								
								
								
		