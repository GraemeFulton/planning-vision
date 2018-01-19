<footer>
					<div class="container">
						<div class="row">






							<div class="col-md-<?php echo esc_attr(anchro_option('width_foo1')) ?>">
								<?php if(is_active_sidebar('footer-1')){
								dynamic_sidebar( 'footer-1' );
								} ?>
							</div>
							<div class="col-md-<?php echo esc_attr(anchro_option('width_foo2')) ?>">
								<?php if(is_active_sidebar('footer-2')){
								dynamic_sidebar( 'footer-2' );
								} ?>
							</div>
							<div class="col-md-<?php echo esc_attr(anchro_option('width_foo3')) ?>">
								<?php if(is_active_sidebar('footer-3')){
								dynamic_sidebar( 'footer-3' );
								} ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="copyright-text">
									<p><?php echo wp_kses_post(anchro_option('copyrights')) ?></p>
								</div>
							</div>
						</div>
					</div>
				</footer>
				<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

			</div>

		</div>

		<?php get_template_part('content','leftmenu') ?>


	</div>




<script type="text/javascript">
<?php echo stripslashes(esc_js(anchro_option('custom_js')));?>
</script>
<?php wp_footer(); ?>
</body>
</html>
