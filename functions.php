<?php

function style_scripts()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('sm-core', get_template_directory_uri() . '/css/sm-core-css.css');
    wp_enqueue_style('sm-blue', get_template_directory_uri() . '/css/sm-blue.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('dark-mode', get_template_directory_uri() . '/css/dark.css');

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), false, true);
    wp_enqueue_script('style', get_template_directory_uri() . '/js/style.js', array('jquery'), false, true);
    wp_enqueue_script('smartmenus', get_template_directory_uri() . '/js/jquery.smartmenus.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'style_scripts');

/**
 * Enable dark theme mode
 * Forked from https://wordpress.org/plugins/wp-night-mode/
 */

function yonkov_dark_mode($classes)
{
    $yonkov_night_mode = isset($_COOKIE['yonkovNightMode']) ? $_COOKIE['yonkovNightMode'] : "";
    //if the cookie is stored..
    if ($yonkov_night_mode !== "") {
        // Add ‘dark-mode’ body class
        return array_merge($classes, array('dark-mode'));
    }
    return $classes;
}
add_filter('body_class', 'yonkov_dark_mode');

// Support Featured Images
add_theme_support('post-thumbnails');

// support nav menu
register_nav_menu('primary', __('Primary menu', 'supersoftlavenders'));

// WordPress Titles
add_theme_support('title-tag');

// Custom settings
function custom_settings_add_menu()
{
    add_menu_page('Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99);
}
add_action('admin_menu', 'custom_settings_add_menu');

// Create Custom Global Settings
function custom_settings_page()
{ ?>
    <div class="wrap">
        <h1>Custom Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('section');
            do_settings_sections('theme-options');
            submit_button();
            ?>
        </form>
    </div>
<?php }

// Twitter
function setting_twitter()
{ ?>
    <input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" />
<?php }

// Github
function setting_github()
{ ?>
    <input type="text" name="github" id="github" value="<?php echo get_option('github'); ?>" />
<?php }

// Tumblr
function setting_tumblr()
{ ?>
    <input type="text" name="tumblr" id="tumblr" value="<?php echo get_option('tumblr'); ?>" />
<?php }

function custom_settings_page_setup()
{
    add_settings_section('section', 'All Settings', null, 'theme-options');
    add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section');
    add_settings_field('github', 'GitHub URL', 'setting_github', 'theme-options', 'section');
    add_settings_field('tumblr', 'Tumblr URL', 'setting_tumblr', 'theme-options', 'section');

    register_setting('section', 'twitter');
    register_setting('section', 'github');
    register_setting('section', 'tumblr');
}
add_action('admin_init', 'custom_settings_page_setup');
