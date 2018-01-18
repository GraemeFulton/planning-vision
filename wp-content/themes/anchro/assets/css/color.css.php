<?php 
$pri_c = anchro_option('pri_c');
$btn_c = anchro_option('btn_c');
$custom_color = "
nav.main-navigation ul li ul.sub-menu li a:hover,
nav.main-navigation ul a:hover ,
nav.main-navigation ul li:last-child .hideLink i,
.sidebar-menu .company-info ul.contact-list li a:hover  ,
footer .contact-info ul.contact-list li a:hover,
.blog-sidebar .contact-info ul.contact-list li a:hover,
.our-blog .latest-post a ,
.our-blog .latest-posts .blog-item a ,
.classic-blog-page .blog-posts .featured-blog-post .text-content a ,
.classic-blog-page .blog-posts .blog-item a,
.body-post a,
.classic-blog-page .blog-posts .blog-item a.read-more,
.grids-blog-page .blog-posts .featured-blog-post .text-content a ,
.grids-blog-page .blog-posts .blog-item .text-content a.read-more,
.blog-pagination ul li a:hover,.pagination .navigate-page a:hover,
section.contact-info .contact-item i,
.section.contact-info .contact-item i ,
.project-page .project-info ul.list-info li a:hover,
.project-page .more-project-info .project-goal ul.goal-info li i,
.blog-sidebar .widget_pages ul li a:hover, 
.blog-sidebar .widget_nav_menu ul li a:hover, 
.blog-sidebar .widget_meta ul li a:hover, 
.blog-sidebar .widget_archive ul li a:hover, 
.blog-sidebar .widget_categories ul li a:hover, 
.blog-sidebar .widget_recent_entries ul li a:hover, 
.blog-sidebar .widget_recent_comments  ul li a:hover,
.first-line span ,
.our-services .left-text a,
.service-icon ,
.service-iconb
 {
	 color: {$pri_c};

}

.sidebar-menu .company-info ul.social-icons li a:hover ,
footer ul.social-icons li a:hover,
section.our-team .member-item figcaption i:hover ,
.section.our-team .member-item figcaption i:hover ,
.single-blog-page .blog-post .blog-item .direction ul li ul.social-icons li a:hover,
.blog-pagination ul .active a,.single .pagination .navigate-page span~span,
.contact-form .btn ,
section.contact-info ,
.section.contact-info ,
.blog-sidebar .connect-us ul.social-icons li a:hover ,
.tagcloud a:hover ,
.slider-button a:hover ,
.accent-button a ,
.go-top ,
.mc4wp-form input[type=submit],
.classic-blog-page .blog-posts .blog-item span.sticky_label,
.grids-blog-page  .blog-posts .blog-item span.sticky_label,
.post-password-form input[type=submit],
.responsive-menu ul.social-icons li a:hover 
 {
	background-color: {$pri_c};

}

.post-password-form input[type=submit]{
border-color: {$pri_c};

}

.slider-button a:hover ,
.go-top {
background-color: {$pri_c} !important;

}





.contact-form .btn ,
.accent-button a ,
.white-button a ,
.mc4wp-form input[type=submit]{
 color: {$btn_c};
}









";
 ?>