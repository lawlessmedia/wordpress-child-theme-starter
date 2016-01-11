<?php
	// https://codex.wordpress.org/Child_Themes
	// beware of caveats of parent theme dependencies
	// look here if this becomes an issue
	// http://wordpress.stackexchange.com/questions/163301/versioning-import-of-parent-themes-style-css

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

// Function to remove the Wordpress meta content generated in the header
function remove_generator() {
    return '';
}

add_filter('the_generator', 'remove_generator');

// Remove Windows Live Writer link in header

remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');  

// Custom Admin Welcome Message
/*
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

function my_custom_dashboard_widgets() {
    global $wp_meta_boxes;
    wp_add_dashboard_widget('custom_welcome_widget', 'Custom Message for ADMIN Dashboard', 'custom_dashboard_welcome');
}

function custom_dashboard_welcome() {

echo '<p>You can edit the site content by clicking either the "<a href="/wp-admin/edit.php?post_type=page">Pages</a>" or the "<a href="/wp-admin/edit.php">Posts</a>" in the left menu.</p>';

}
*/
// end Custom Admin Welcome Message

// Add Custom Logo to the Admin login page
/*
function my_custom_login_logo() {
    echo '<style type="text/css">
        .login h1 a { background-image:url('. get_bloginfo('siteurl') .'/wp-content/images/login-logo.png) !important; width: 250px; height: 68px; margin-bottom: 15px; background-size: 250px 68px;}
    </style>';
}

add_action('login_head', 'my_custom_login_logo');

//Custom Login Screen
function change_wp_login_url() {
	return get_home_url();
}

function change_wp_login_title() {
	return get_bloginfo('name');
}

add_filter('login_headerurl', 'change_wp_login_url');
add_filter('login_headertitle', 'change_wp_login_title');
*/
// End custom logo to the login page

?>