<?php 
if(anchro_option('blog_type')=='classic'){
get_template_part('template','blog-classic');
}else if(anchro_option('blog_type')=='grid'){
get_template_part('template','blog-grid');
}
 ?>