<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ( post_password_required()) {  // and it doesn't match the cookie
			?>
<div class="col-sm-12">
	<div class="comments">
			<h4 class="nocomments st_comment"><?php esc_html_e('Enter the password to view comments.','anchro') ?></h4>
</div></div>
			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	
	
	
	


?>

<!-- You can start editing here. -->
<!-- Comment Section Begins -->
























	<?php if ($comments) : ?>

<div class="col-sm-12">
<div class="comments">
	<!-- Comments list -->
	<h4 id="comments" class="st_comment"><?php comments_number(esc_html__('0 Comments','anchro') ,esc_html__('1 Comment','anchro'),esc_html__('% Comments','anchro')) ?></h4>

	
	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
	<p><?php esc_html_e('You are not signed in.','anchro') ?> <a href="<?php echo esc_url(get_option('siteurl')); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php esc_html_e('Sign in','anchro') ?></a> <?php esc_html_e('to post comments.','anchro') ?></p>
	<?php endif; ?>
	<div class="comment-items">
		<ul class="ulcoments">
		<?php wp_list_comments( array( 'callback' => 'anchro_comment', 'style' => 'ul' ) ); ?>
		</ul>
	</div>
					

	<?php paginate_comments_links();  ?>
	 </div><!-- Comments Ends -->	
 
 </div><!-- Comment Section Ends -->	
<?php else: ?>
<div class="col-sm-12">
<div class="comments comments-empty <?php if(!anchro_option('social_page'))echo 'comments-super-empty' ?>">
</div><!-- Comments Ends -->	
 
 </div><!-- Comment Section Ends -->	
<?php endif; ?>


 
 	<div class="col-sm-12">
	<div class="leave-comment">
<?php if ('open' == $post->comment_status) : ?>










<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php esc_html_e('You are not signed in.','anchro') ?> <a href="<?php echo esc_url(get_option('siteurl')); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php esc_html_e('Sign in','anchro') ?></a> <?php esc_html_e('to post comments.','anchro') ?></p>

<?php else : ?>

	
       
            <h4 id="respond" class="st_comment"><?php esc_html_e('Leave a comment','anchro') ?></h4>
			<p class="form-message " style="display: none;"></p>

			<?php if ( $user_ID ) : ?>
		
			<p><?php esc_html_e('Logged in as','anchro') ?> <a href="<?php echo esc_url(get_option('siteurl')); ?>/wp-admin/profile.php"><?php echo esc_html($user_identity); ?></a>. <a href="<?php echo esc_url(get_option('siteurl')); ?>/wp-login.php?action=logout" title="<?php esc_attr_e('Log out of this account','anchro') ?>"><?php esc_html_e('Log out','anchro') ?> &raquo;</a></p>
		
			<?php endif; ?>
			
			
			<!-- comment form -->
			<form role="form" name="contactform" class="comment-area row" id="contactform" method="post" action="<?php echo esc_url(get_option('siteurl')); ?>/wp-comments-post.php">
				
				<?php if ( !$user_ID ) : ?>
				<!-- author field -->				
				
				<div class="col-md-4">
					<input type="text" name="author" class="blog-search-field" placeholder="<?php esc_html_e('Your name here...','anchro') ?>"/>				
				</div>
				
				<div class="col-md-4">
					<input type="email" name="email" class="blog-search-field" placeholder="<?php esc_html_e('Your email here...','anchro') ?>"/>				
				</div>
				
				<div class="col-md-4">
					<input type="text" name="subject" class="blog-search-field" placeholder="<?php esc_html_e('Subject...','anchro') ?>"/>				
				</div>
				
				
				<?php endif; ?>
				
				<div class="col-md-12">
					<textarea name="comment" placeholder="<?php esc_html_e('Your message here...','anchro') ?>"></textarea>
				</div>
				<div class="col-md-12">
					<div class="accent-button">
						<a href="#" onclick="document.forms['contactform'].submit(); return false;"><?php esc_html_e('Post Comment','anchro') ?></a>
					</div>
				</div>				
				
				<?php echo get_comment_id_fields( $id ) ?>
			<?php do_action('comment_form', $post->ID); ?>
			</form><!-- comment form end -->
			
			
			

			
			

<?php if(anchro_option('classic_form')){
	comment_form();
} ?>

<?php endif; // If registration required and not logged in ?>

<?php else: ?>
	<?php if(!is_page()): ?>
	<h4 class="st_comment nocomments post"><?php esc_html_e('Comments are closed','anchro') ?></h4>
	<?php endif; ?>
<?php endif; // if you delete this the sky will fall on your head ?>
</div><!-- Comments Ends -->	
 
 </div><!-- Comment Section Ends -->	