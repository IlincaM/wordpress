<?php

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_theme_enqueue_styles() {
    $parent_style = 'parent-style'; // This is 'hiero-style' for the Hiero theme.
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style), wp_get_theme()->get('Version')
    );
}

function register_my_menu() {
    register_nav_menu('header-menu-blog', __('Header Menu Blog'));
    register_nav_menu('header-menu-social', __('Header Menu Social'));
    register_nav_menu('footer-menu', __('Footer Menu'));
}

add_action('init', 'register_my_menu');

function enqueue_our_required_stylesheets() {
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
}

add_action('wp_enqueue_scripts', 'enqueue_our_required_stylesheets');

function outputcategories() {
    $categories = get_categories();
    foreach ($categories as $category) {
        echo "<ul>"
        . "<li><a href='"
        . get_category_link($category->cat_ID)
        . "'>$category->name</a></li></ul>";
    }
}
function get_excerpt(){
$excerpt = get_the_content();
$excerpt = preg_replace(" ([.*?])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, 300);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = trim(preg_replace( '/s+/', ' ', $excerpt));
$excerpt = $excerpt.'... <a class="style-read-more" href="'.get_permalink().'">read more</a>';
return $excerpt;
}
/** 
* GLOBAL VARIABLES 
*/
global $count; 
$count = 0;
