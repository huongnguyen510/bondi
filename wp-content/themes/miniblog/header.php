<!DOCTYPE html>
<html <?php language_attributes() ?> >
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

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri() ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri() ?>/css/blog-home.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri() ?>/style.css" rel="stylesheet">

    <?php wp_head() ?>
  </head>

  <body style="padding-top: 0" <?php body_class() ?> >

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark <?php echo is_home() ? 'mb-3' : '' ?>">
      <div class="container">
        <a class="navbar-brand" href="<?php echo home_url() ?>">Mini Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

          <?php 
            wp_nav_menu( array(
                'theme_location'  => 'header-menu', // Gọi menu đã đăng ký trong function
                'depth'           => 2,     // Cấu hình dropdown 2 cấp
                'container'       => false, // Thẻ div bọc menu
                'menu_class'      => 'navbar-nav ml-auto', // Class của nav bootstrap
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker()
            ) );
          ?>

        </div>
      </div>
    </nav>

    <?php mini_blog_breadcrumbs() ?>



