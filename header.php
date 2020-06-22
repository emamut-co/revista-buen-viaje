<!DOCTYPE html>
  <html lang="<?php language_attributes(); ?>" class="no-js">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); wp_title(); ?></title>

    <?php wp_head(); ?>
  </head>
  <body>
    <?php $url = ''; if(!is_home()) $url = get_site_url(); ?>

    <div class="container-fluid" id="app">
    <?php include('menu.php') ?>
    <div class="row">
      <div class="container">
        <div class="row my-2 d-none">
          <div class="col text-center">
            <img src="https://via.placeholder.com/920x90?text=Ads%20920x90" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>