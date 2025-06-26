<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container">
            <h1><?php bloginfo('name'); ?></h1>
            <small><?php bloginfo('description'); ?></small>
        </div>
    </header>
    <nav class="main-nav">
        <div class="container">
            <?php wp_nav_menu(['theme_location' => 'primary']); ?>
        </div>
    </nav>