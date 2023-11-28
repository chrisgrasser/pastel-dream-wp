<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php wp_head(); ?>
</head>

<body class="d-none">
    <!-- dark/light mode button -->
    <div class="wpnm-button">
        <div class="wpnm-button-inner-left"></div>
        <div class="wpnm-button-inner"></div>
    </div>

    <!-- navbar -->
    <div class="blog-masthead">
        <div class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="blog-header navbar-brand">
                    <h1 class="blog-title"><a href="<?php echo get_bloginfo('wpurl'); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#site-navigation" aria-controls="site-navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="blog-nav collapse navbar-collapse">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container'  => '',
                        'menu_class' => 'navbar-nav sm sm-blue',
                        'menu_id' => 'main-menu'
                    ));
                    ?>
                </div>
                <div class="collapse navbar-collapse small-nav" id="site-navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container'  => '',
                        'menu_class' => 'navbar-nav mx-3',
                        'menu_id' => 'small-menu'
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div> <!-- end of navbar -->