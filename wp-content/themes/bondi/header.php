<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        <?php if (is_home()): ?>
          <?php bloginfo('name') ?>
        <?php elseif( is_single() ): ?>
            <?php echo get_field('seo_title'); ?>
        <?php else: ?>
          <?php wp_title('', true,''); ?>
        <?php endif ?>
    </title>
    
    <?php if (is_home()): ?> <!-- Khi ở trang chủ -->
        <meta name="description" content="<?php bloginfo('description') ?>" />
    <?php elseif(is_single()): ?> <!-- Khi ở trang bài viết -->
        <meta name="description" content="<?php echo get_field('seo_description'); ?>" />
        <meta name="keywords" content="<?php echo get_field('seo_keywords'); ?>" />
    <?php endif ?>

    <!-- link CSS, Lib, JS -->
    <link href="<?php echo get_template_directory_uri() ?>/css/slick/slick.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/css/slick/slick-theme.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/css/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/css/fontawesome/css/brands.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/css/fontawesome/css/solid.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/css/import.css" rel="stylesheet">
  
    <?php wp_head() ?>
</head>

<body>
  <div class="full-page">
    <header class="header">
      
    </header>
