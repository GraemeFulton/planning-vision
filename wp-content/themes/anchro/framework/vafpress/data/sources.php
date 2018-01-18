<?php

/**
 * Here is the place to put your own defined function that serve as
 * datasource to field with multiple options.
 */

function vafpress_get_categories()
{
	$wp_cat = get_categories(array('hide_empty' => 0 ));

	$result = array();
	foreach ($wp_cat as $cat)
	{
		$result[] = array('value' => $cat->cat_ID, 'label' => $cat->name);
	}
	return $result;
}

function vafpress_get_users()
{
	$wp_users = VAFPRESS_WP_User::get_users();

	$result = array();
	foreach ($wp_users as $user)
	{
		$result[] = array('value' => $user['id'], 'label' => $user['display_name']);
	}
	return $result;
}

function vafpress_get_posts()
{
	$wp_posts = get_posts(array(
		'posts_per_page' => -1,
	));

	$result = array();
	foreach ($wp_posts as $post)
	{
		$result[] = array('value' => $post->ID, 'label' => $post->post_title);
	}
	return $result;
}

function vafpress_get_pages()
{
	$wp_pages = get_pages();

	$result = array();
	foreach ($wp_pages as $page)
	{
		$result[] = array('value' => $page->ID, 'label' => $page->post_title);
	}
	return $result;
}

function vafpress_get_tags()
{
	$wp_tags = get_tags(array('hide_empty' => 0));
	$result = array();
	foreach ($wp_tags as $tag)
	{
		$result[] = array('value' => $tag->term_id, 'label' => $tag->name);
	}
	return $result;
}

function vafpress_get_roles()
{
	$result         = array();
	$editable_roles = VAFPRESS_WP_User::get_editable_roles();

	foreach ($editable_roles as $key => $role)
	{
		$result[] = array('value' => $key, 'label' => $role['name']);
	}

	return $result;
}



function vafpress_get_social_medias() {
	$socmeds = array(
		array('value' => 'blogger', 'label' => 'Blogger'),
		array('value' => 'delicious', 'label' => 'Delicious'),
		array('value' => 'deviantart', 'label' => 'DeviantArt'),
		array('value' => 'digg', 'label' => 'Digg'),
		array('value' => 'dribbble', 'label' => 'Dribbble'),
		array('value' => 'email', 'label' => 'Email'),
		array('value' => 'facebook', 'label' => 'Facebook'),
		array('value' => 'flickr', 'label' => 'Flickr'),
		array('value' => 'forrst', 'label' => 'Forrst'),
		array('value' => 'foursquare', 'label' => 'Foursquare'),
		array('value' => 'github', 'label' => 'Github'),
		array('value' => 'googleplus', 'label' => 'Google+'),
		array('value' => 'instagram', 'label' => 'Instagram'),
		array('value' => 'lastfm', 'label' => 'Last.FM'),
		array('value' => 'linkedin', 'label' => 'LinkedIn'),
		array('value' => 'myspace', 'label' => 'MySpace'),
		array('value' => 'pinterest', 'label' => 'Pinterest'),
		array('value' => 'reddit', 'label' => 'Reddit'),
		array('value' => 'rss', 'label' => 'RSS'),
		array('value' => 'soundcloud', 'label' => 'SoundCloud'),
		array('value' => 'stumbleupon', 'label' => 'StumbleUpon'),
		array('value' => 'tumblr', 'label' => 'Tumblr'),
		array('value' => 'twitter', 'label' => 'Twitter'),
		array('value' => 'vimeo', 'label' => 'Vimeo'),
		array('value' => 'wordpress', 'label' => 'WordPress'),
		array('value' => 'yahoo', 'label' => 'Yahoo!'),
		array('value' => 'youtube', 'label' => 'Youtube'),
	);

	return $socmeds;
}



VAFPRESS_Security::instance()->whitelist_function('vafpress_dep_boolean');

function vafpress_dep_boolean($value)
{
	$args   = func_get_args();
	$result = true;

	foreach ($args as $val)
	{
		$result = ($result and !empty($val));
	}
	return $result;
}

/**
 * EOF
 */