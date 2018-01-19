<header class="site-header">
					<div id="main-header" class="main-header header-sticky">
						<div class="inner-header container clearfix">

								<a class="pull-left" href="<?php echo esc_url(home_url('/')) ?>"><img class="logoImg" src="<?php echo get_template_directory_uri();?>/assets/images/logo.png"/></a>
							<div class="header-right-toggle pull-right">
								<a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
							</div>
							<?php
							if(is_page_template('template-one-page.php')){
								$anchro_nav_args = array(
									'theme_location' => 'one-page-menu',
									'depth'             => 3,
									'container'         => 'nav',
									'container_class'   => 'main-navigation text-right hidden-xs hidden-sm',
									'container_id'      => '',
									'menu_class'        => '',
									'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
									'walker'            => new wp_bootstrap_navwalker(),
									'items_wrap' => anchro_nav_wrap()
								);
								wp_nav_menu( $anchro_nav_args );
							}else{
								$anchro_nav_args = array(
									'theme_location' => 'main-menu',
									'depth'             => 3,
									'container'         => 'nav',
									'container_class'   => 'main-navigation text-right hidden-xs hidden-sm',
									'container_id'      => '',
									'menu_class'        => '',
									'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
									'walker'            => new wp_bootstrap_navwalker(),
									'items_wrap' => anchro_nav_wrap()
								);
								wp_nav_menu( $anchro_nav_args );
							}
							?>
						</div>
					</div>
				</header>
