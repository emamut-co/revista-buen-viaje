<?php get_header();

$args = array(
  'category_id' => 30,
  'posts_per_page' => 3,
);

$result = new WP_Query($args);
$articuloCentralArray = $result->posts;

$args = array(
  'category_id' => 15,
  'posts_per_page' => 4,
);

$noticiasNacionales = new WP_Query($args); ?>

<section class="bg-light p-4">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h2 class="title"><?php echo $articuloCentralArray[0]->post_title ?></h2>
        <img src='<?php echo get_the_post_thumbnail_url($articuloCentralArray[0]->ID, 'full') ?>' class="img-fluid mt-2" alt='' />
        <p class="card-text mt-3"><small class="muted"><i class="far fa-clock"></i> Publicado: <?php echo date_i18n('d \d\e F Y g:i', strtotime($articuloCentralArray[0]->post_date)) ?></small><br>
        <?php echo !empty($articuloCentralArray[0]->excerpt) ? $articuloCentralArray[0]->excerpt : substr($articuloCentralArray[0]->post_content, 0, 250) . ' ...' ?></small></p>
        <p class="text-right text-muted"><a href="./single.php"><small>Leer más <i class="fa fa-angle-double-right"></i></small></a></p>
      </div>
      <div class="col-md-4">
        <input class="form-control mb-4" type="text" placeholder="Buscar...">
        <img src="<?php echo get_template_directory_uri() ?>/img/logo-articulo-central.png" alt="" class="img-fluid">
        <a href="./single.php"><h5 class="title mt-4"><?php echo $articuloCentralArray[1]->post_title ?></h5></a>
        <img src='<?php echo get_the_post_thumbnail_url($articuloCentralArray[1]->ID, 'full') ?>' class="img-fluid mt-" alt='' />

        <a href="./single.php"><h5 class="title mt-5"><?php echo $articuloCentralArray[2]->post_title ?></h5></a>
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
            <?php while ( $noticiasNacionales->have_posts() ) : $noticiasNacionales->the_post(); ?>
            <div class="col mb-4">
              <div class="card border-0">
                <?php the_post_thumbnail('medium', ['class' => 'card-img-top']) ?>
                <div class="card-body px-0">
                  <p class="card-title"><strong><?php the_title() ?></strong><br>
                  <!-- <span class="badge badge-primary">Ceda el paso</span> <span class="badge badge-warning">Chóferes</span> -->
                  <p class="card-text"><small class="muted"><i class="far fa-clock"></i> Publicado: 15 de mayo de 2020</small><br>
                  <?php the_excerpt() ?></p>
                  <p class="text-right text-muted"><a href="<?php the_permalink() ?>"><small>Leer más <i class="fa fa-angle-double-right"></i></small></a></p>
                </div>
              </div>
            </div>
            <?php endwhile ?>
          </div>
        </section>
        <section class="p-4 bg-dark">
          <div class="row mt-4">
            <div class="col">
              <img src="<?php echo get_template_directory_uri() ?>/img/logo-carroceros.png" alt="" class="img-fluid">
            </div>
          </div>
          <div class="row row-cols-1 row-cols-md-2 mt-4">
            <div class="col mb-4" v-for="n in 4">
              <div class="card border-0">
                <img src="https://unsplash.it/400/300?random&blur&gravity=center" alt="" class="card-img-top">
                <div class="card-body text-white px-0 bg-dark">
                  <p class="card-title text-white"><strong>Velit anim velit occaecat id non proident labore sunt do.</strong><br>
                  <span class="badge badge-primary">Ceda el paso</span> <span class="badge badge-warning">Chóferes</span></p>
                  <p class="card-text"><small class="muted"><i class="far fa-clock"></i> Publicado: 15 de mayo de 2020</small><br>
                    Elit labore ullamco cillum commodo tempor. Irure ut pariatur adipisicing ea sit adipisicing elit ex quis
                    adipisicing.</p>
                  <p class="text-right text-muted"><a href="#"><small class="text-secondary">Leer más <i class="fa fa-angle-double-right"></i></small></a></p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="p-4">
          <div class="row mt-4">
            <div class="col">
              <img src="<?php echo get_template_directory_uri() ?>/img/logo-sobre-marcha.png" alt="" class="imf-fluid">
            </div>
          </div>
          <div class="row row-cols-1 row-cols-md-2 mt-4">
            <div class="col mb-4" v-for="n in 4">
              <div class="card border-0">
                <img src="https://unsplash.it/400/300?random&blur&gravity=center" alt="" class="card-img-top">
                <div class="card-body px-0">
                  <p class="card-title"><strong>Velit anim velit occaecat id non proident labore sunt do.</strong><br>
                    <span class="badge badge-primary">Ceda el paso</span> <span class="badge badge-warning">Chóferes</span>
                  <p class="card-text"><small class="muted"><i class="far fa-clock"></i> Publicado: 15 de mayo de 2020</small><br>
                    Elit labore ullamco cillum commodo tempor. Irure ut pariatur adipisicing ea sit adipisicing elit ex quis
                    adipisicing.</p>
                  <p class="text-right text-muted"><a href="./single.php"><small>Leer más <i class="fa fa-angle-double-right"></i></small></a></p>
                </div>
              </div>
            </div>
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