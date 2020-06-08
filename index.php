<?php get_header();

$do_not_duplicate = array();
$result = new WP_Query("category_name='articulo-central'&posts_per_page=3");
$articuloCentralArray = $result->posts; ?>

<section class="bg-light p-4">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <a href="<?php echo get_permalink($articuloCentralArray[0]->ID) ?>"><h2 class="title"><?php echo $articuloCentralArray[0]->post_title; $do_not_duplicate[] = $articuloCentralArray[0]->ID ?></h2></a>
        <img src='<?php echo get_the_post_thumbnail_url($articuloCentralArray[0]->ID, 'full') ?>' class="img-fluid mt-2" alt='' />
        <p class="card-text mt-3"><small class="muted"><i class="far fa-clock"></i> Publicado: <?php echo date_i18n('d \d\e F Y g:i', strtotime($articuloCentralArray[0]->post_date)) ?></small><br>
        <?php echo get_the_excerpt($articuloCentralArray[0]->ID) ?></small></p>
        <p class="text-right text-muted"><a href="<?php echo get_permalink($articuloCentralArray[0]->ID) ?>"><small>Leer más <i class="fa fa-angle-double-right"></i></small></a></p>
      </div>
      <div class="col-md-4">
        <input class="form-control mb-4" type="text" placeholder="Buscar...">
        <img src="<?php echo get_template_directory_uri() ?>/img/logo-articulo-central.png" alt="" class="img-fluid">
        <a href="<?php echo get_permalink($articuloCentralArray[1]->ID) ?>"><h5 class="title mt-4"><?php echo $articuloCentralArray[1]->post_title; $do_not_duplicate[] = $articuloCentralArray[1]->ID ?></h5></a>
        <img src='<?php echo get_the_post_thumbnail_url($articuloCentralArray[1]->ID, 'full') ?>' class="img-fluid mt-" alt='' />

        <a href="<?php echo get_permalink($articuloCentralArray[2]->ID) ?>"><h5 class="title mt-5"><?php echo $articuloCentralArray[2]->post_title; $do_not_duplicate[] = $articuloCentralArray[2]->ID ?></h5></a>
        <img src='<?php echo get_the_post_thumbnail_url($articuloCentralArray[2]->ID, 'full') ?>' class="img-fluid mt-" alt='' />
      </div>
    </div>
  </div>
</section>
<div class="row">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <section class="p-4">
          <div class="row mt-4">
            <div class="col">
              <img src="<?php echo get_template_directory_uri() ?>/img/logo-noticias-nacionales.png" alt="" class="img-fluid">
            </div>
          </div>
          <div class="row row-cols-1 row-cols-md-2 mt-4">
            <?php $noticiasNacionales = new WP_Query(array('category_name' => 'alcance-nacional', 'posts_per_page' => 4, 'post__not_in' => $do_not_duplicate));
            while ( $noticiasNacionales->have_posts() ) : $noticiasNacionales->the_post(); $do_not_duplicate[] = get_the_ID(); ?>
            <div class="col mb-4">
              <div class="card border-0">
                <?php the_post_thumbnail('medium', ['class' => 'card-img-top']) ?>
                <div class="card-body px-0">
                  <a class="card-title" href="<?php the_permalink() ?>"><strong><?php the_title() ?></strong></a>
                  <p class="card-text"><small class="muted"><i class="far fa-clock"></i> Publicado: <?php the_time('d \d\e F Y g:i'); ?></small><br>
                  <?php the_excerpt() ?></p>
                  <p class="text-right text-muted"><a href="<?php the_permalink() ?>"><small>Leer más <i class="fa fa-angle-double-right"></i></small></a></p>
                </div>
              </div>
            </div>
            <?php endwhile; wp_reset_postdata() ?>
          </div>
        </section>
        <section class="p-4 bg-dark">
          <div class="row mt-4">
            <div class="col">
              <img src="<?php echo get_template_directory_uri() ?>/img/logo-carroceros.png" alt="" class="img-fluid">
            </div>
          </div>
          <div class="row row-cols-1 row-cols-md-2 mt-4">
            <?php $carroceros = new WP_Query(array('category_name' => 'carroceros', 'posts_per_page' => 4, 'post__not_in' => $do_not_duplicate));
            while ( $carroceros->have_posts() ) : $carroceros->the_post(); $do_not_duplicate[] = get_the_ID(); ?>
            <div class="col mb-4">
              <div class="card border-0">
                <?php the_post_thumbnail('medium', ['class' => 'card-img-top']) ?>
                <div class="card-body text-white px-0 bg-dark">
                  <a class="card-title text-white" href="<?php the_permalink() ?>"><strong><?php the_title() ?></strong></a>
                  <p class="card-text"><small class="muted"><i class="far fa-clock"></i> Publicado: <?php the_time('d \d\e F Y g:i'); ?></small><br>
                    <?php the_excerpt() ?></p>
                  <p class="text-right text-muted"><a href="<?php the_permalink() ?>"><small class="text-secondary">Leer más <i class="fa fa-angle-double-right"></i></small></a></p>
                </div>
              </div>
            </div>
            <?php endwhile; wp_reset_postdata() ?>
          </div>
        </section>
        <section class="p-4">
          <div class="row mt-4">
            <div class="col">
              <img src="<?php echo get_template_directory_uri() ?>/img/logo-sobre-marcha.png" alt="" class="imf-fluid">
            </div>
          </div>
          <div class="row row-cols-1 row-cols-md-2 mt-4">
            <?php $sobreLaMarcha = new WP_Query(array('category_name' => 'sobre-la-marcha', 'posts_per_page' => 4, 'post__not_in' => $do_not_duplicate));
            while ( $sobreLaMarcha->have_posts() ) : $sobreLaMarcha->the_post(); $do_not_duplicate[] = get_the_ID(); ?>
            <div class="col mb-4">
              <div class="card border-0">
                <?php the_post_thumbnail('medium', ['class' => 'card-img-top']) ?>
                <div class="card-body px-0">
                  <a class="card-title" href="<?php the_permalink() ?>"><strong><?php the_title() ?></strong></a>
                  <p class="card-text"><small class="muted"><i class="far fa-clock"></i> Publicado: <?php the_time('d \d\e F Y g:i'); ?></small><br>
                  <?php the_excerpt() ?></p>
                  <p class="text-right text-muted"><a href="<?php the_permalink() ?>"><small>Leer más <i class="fa fa-angle-double-right"></i></small></a></p>
                </div>
              </div>
            </div>
            <?php endwhile; wp_reset_postdata() ?>
          </div>
        </section>
      </div>
      <div class="col-md-4 pt-4 d-none">
        <img src="https://via.placeholder.com/500?text=Ads%20500x500" alt="" class="img-fluid mt-4">
      </div>
    </div>
  </div>
</div>

<?php get_footer() ?>