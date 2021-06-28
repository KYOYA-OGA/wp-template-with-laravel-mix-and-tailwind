<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header','content'); ?>
  <h1>index.phpです</h1>

  <div class="container mx-auto">
    <div class="grid grid-cols-3 gap-3">
        <picture>
          <source srcset="<?php echo get_theme_file_uri("/dist/images/dog.webp"); ?>" type="image/webp" >
          <source srcset="<?php echo get_theme_file_uri('/dist/images/dog.webp'); ?>" media="(min-width: 765px)"
            type="image/webp">
          <img src="<?php echo get_theme_file_uri("/dist/images/dog.jpg"); ?>" alt="" >
        </picture>
        <picture>
          <source srcset="<?php echo get_theme_file_uri("/dist/images/dog.webp"); ?>" type="image/webp" >
          <source srcset="<?php echo get_theme_file_uri('/dist/images/dog.webp'); ?>" media="(min-width: 765px)"
            type="image/webp">
          <img src="<?php echo get_theme_file_uri("/dist/images/dog.jpg"); ?>" alt="" >
        </picture>
        <picture>
          <source srcset="<?php echo get_theme_file_uri("/dist/images/dog.webp"); ?>" type="image/webp" >
          <source srcset="<?php echo get_theme_file_uri('/dist/images/dog.webp'); ?>" media="(min-width: 765px)"
            type="image/webp">
          <img src="<?php echo get_theme_file_uri("/dist/images/dog.jpg"); ?>" alt="" >
        </picture>
    </div>
  </div>
  <?php get_template_part('includes/footer','content'); ?>
  <?php get_footer(); ?>
</body>

</html>
