<ul class="social-icons text-center">
				<?php if(anchro_option('facebook_share')): ?>
				<?php $link = 'http://www.facebook.com/sharer.php?u='.get_the_permalink().'&amp;t='.urlencode($post->post_title); ?>
				<li><a target="_blank" class="" href="<?php echo esc_url($link) ?>"><i class="fa fa-facebook"></i></a></li>
				<?php endif; ?>
				
				<?php if(anchro_option('twitter_share')): ?>
				<?php $link = 'http://twitter.com/home?status='.urlencode($post->post_title).'+' . get_the_permalink(); ?>
				<li><a target="_blank" class="" href="<?php echo esc_url($link) ?>"><i class="fa fa-twitter"></i></a></li>
				<?php endif; ?>
				
				<?php if(anchro_option('pinterest_share')): ?>
				<?php 
					$pinterest_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' );	
					$link = 'http://pinterest.com/pin/create/button/?url='.urlencode(get_permalink()).'&amp;description='.urlencode($post->post_title).'&amp;media='.$pinterest_src[0];
				?>
				<li><a class="" target="_blank" href="<?php echo esc_url($link) ?>"><i class="fa fa-pinterest"></i></a></li>
				<?php endif; ?>
				
				<?php if(anchro_option('linkedin_share')): ?>
				<?php $link = 'http://linkedin.com/shareArticle?mini=true&amp;url='.get_the_permalink().'&amp;title='.urlencode($post->post_title); ?>
				<li><a target="_blank" class="" href="<?php echo esc_url($link) ?>"><i class="fa fa-linkedin"></i></a></li>
				<?php endif; ?>
				
				<?php if(anchro_option('googlep_share')): ?>
				<?php $link = 'https://plus.google.com/share?url=' .get_the_permalink();?>
				<li><a target="_blank" class="" href="<?php echo esc_url($link) ?>" 
				onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i></a></li>
				<?php endif; ?>
				
				
				
				<?php if(anchro_option('reddit_share')): ?>
				<?php $link = 'http://reddit.com/submit?url='.get_the_permalink().'&amp;title='.urlencode($post->post_title); ?>
				<li><a class="" target="_blank" href="<?php echo esc_url($link) ?>"><i class="fa fa-reddit"></i></a></li>
				<?php endif; ?>
				
				<?php if(anchro_option('mail_share')): ?>
				<li><a class="" href="mailto:?subject=<?php echo urlencode($post->post_title); ?>&amp;body=<?php the_permalink(); ?>" ><i class="fa fa-envelope"></i></a></li>
				<?php endif; ?>
				
				<?php if(anchro_option('tumblr_share')): ?>
				<?php $link = 'http://www.tumblr.com/share/link?url='. urlencode(get_permalink()).'&amp;name='.urlencode($post->post_title).'&amp;description='.urlencode(get_the_excerpt()); ?>
				<li><a target="_blank" href="<?php echo esc_url($link ) ?>"><i class="fa fa-tumblr"></i></a></li>
				<?php endif; ?>
		
</ul>
