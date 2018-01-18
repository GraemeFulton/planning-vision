<?php 
function anchro_show_archive(){
			if(is_category()){
				printf(esc_attr(anchro_option('label_category')),str_replace('-',' ',get_query_var('category_name')));
			}elseif(is_tag()){
				printf(esc_attr(anchro_option('label_tag')),single_tag_title("", false));
			}elseif(is_day()){
				printf(esc_attr(anchro_option('label_time_day')),get_the_time('F jS, Y'));
			}elseif(is_month()){
				printf(esc_attr(anchro_option('label_time_month')),get_the_time('F, Y'));
			}elseif(is_year()){
				printf(esc_attr(anchro_option('label_time_year')),get_the_time('Y'));
			}elseif(is_author()){
				printf(esc_html__('%s\'s Posts','anchro'),get_the_author());
			}elseif(taxonomy_exists('portfolio-category')){
				if(is_post_type_archive( 'portfolio') ){
				echo esc_attr(anchro_option('portfolio_archive_title'));
				}else{
				printf(esc_attr(anchro_option('portfolio_categories_label')),single_term_title("", false));
				}
				
			}elseif(taxonomy_exists('portfolio-category')){
				printf(esc_html__('Archive post: %s','anchro'),single_term_title("", false));
			}
				
}


	
function anchro_show_search(){

 printf(esc_attr(anchro_option('label_search')),get_search_query());

}






function showCallAction(){

 ?>
	<section class="second-call-to-action">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php echo wp_kses_post(anchro_option('banner_in_blog_content')); ?>
				</div>
			</div>
		</div>
	</section>

 
 <?php 
}