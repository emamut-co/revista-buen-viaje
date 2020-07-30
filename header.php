<!DOCTYPE html>
  <html lang="<?php language_attributes(); ?>" class="no-js">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('|',true,'right') ?></title>

    <?php wp_head(); ?>
  </head>
  <body>
    <?php $url = ''; if(!is_home()) $url = get_site_url(); ?>

    <div class="container-fluid" id="app">
      <?php get_template_part( 'partials/menu', 'template' ); ?>