<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/style.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <a href="<?php echo get_permalink(30); ?>"> <img src="wp-content/themes/Pizzeria/assets/pizza-logo.svg"></a>
        <div class="start-links">
            <a href="#story">Story</a>
            <p> / </p>
            <a href="#pizzas">Pizzas</a>
        </div>
        <a href="<?php echo get_permalink(26); ?>" class="contact-link">Book now</a>
    </header>