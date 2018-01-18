<?php 


function anchro_blog_embed($limit = 4, $ids=''){

		
		if($limit=='') $limit = 4;
		
		$myarray = array('1790', '151');
		
		if($ids!=''){
		$args = array( 'post_type' => 'post', 'post__in' => $myarray, 'posts_per_page' => $limit, 'ignore_sticky_posts'=>1);
		
		}else{
		$args = array( 'post_type' => 'post', 'posts_per_page' => $limit, 'ignore_sticky_posts'=>1);
		}
		$loop = new WP_Query( esc_sql($args) );
		
		$cc=0;
		
		
		if($loop->have_posts()):
		echo '<div class="row">';
		while ( $loop->have_posts() ) : $loop->the_post();
		
			if($cc==0):
			$cc++;
			?>
			
			<div class="col-md-6">
				<div class="latest-post">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('anchro_bembed-featured') ?></a>
					<a href="<?php the_permalink() ?>"><h3><?php echo esc_html(get_the_title()) ?></h3></a>
					<span><?php
						$category = get_the_category();
						if(isset($category[0])){
						echo esc_html($category[0]->cat_name).' / ';
						}
						?><?php the_time(esc_html__('F j, Y','anchro')) ?> </span>
					<?php $anchro_word_limit = 38;
						$anchro_full_content = get_the_content('');
						$anchro_words = explode(" ",$anchro_full_content);
						$anchro_post_content =  implode(" ",array_splice($anchro_words,0,$anchro_word_limit));
						
						echo apply_filters( 'the_content',$anchro_post_content.'...');  ?>
					<a href="<?php the_permalink() ?>"><?php echo esc_html(anchro_option('read_more_label')) ?></a>
				</div>
			</div>
			
			
			<?php 
			else:				
				 if($cc==1){echo '<div class="col-md-6"><div class="latest-posts">';}
				 ?>
				
				
				<div class="col-md-12">
					<div class="blog-item">
						<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('anchro_bembed-thumbnail') ?></a>
						<a href="<?php the_permalink() ?>"><h4><?php echo esc_html(get_the_title()) ?></h4></a>
						<span><?php
						$category = get_the_category();
						if(isset($category[0])){
						echo esc_html($category[0]->cat_name).' / ';
						}
						?><?php the_time(esc_html__('F j, Y','anchro')) ?> </span>
						<?php $anchro_word_limit = 20;
						$anchro_full_content = get_the_content('');
						$anchro_words = explode(" ",$anchro_full_content);
						$anchro_post_content =  implode(" ",array_splice($anchro_words,0,$anchro_word_limit));
						
						echo apply_filters( 'the_content', $anchro_post_content.'...');  ?>
						<a href="<?php the_permalink() ?>"><?php echo esc_html(anchro_option('read_more_label')) ?></a>
					</div>
				</div>
									
									
				<?php 
				
				
				$cc++;
			endif;
			
		endwhile;
		echo '</div></div></div>';
		else:
		esc_html_e('No Posts Founds.','anchro');
		endif;
		wp_reset_postdata(); 
		?>
<?php 
}
 ?>	