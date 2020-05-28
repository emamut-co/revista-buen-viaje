<?php get_header(); ?>

<section class="bg-light p-4">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h2 class="title">Et occaecat exercitation consequat labore aute.</h2>
        <img src='https://unsplash.it/950/650?random&blur&gravity=center' class="img-fluid mt-2" alt='' />
        <p class="card-text mt-3"><small class="muted"><i class="far fa-clock"></i> Publicado: 15 de mayo de 2020</small><br>
        Cillum qui magna ut eu id reprehenderit excepteur cillum duis anim nulla. Elit aliquip qui excepteur nisi do adipisicing ullamco nostrud nisi. Anim adipisicing nulla veniam magna velit laborum enim cillum esse sit esse elit voluptate Lorem.</small></p>
        <p class="text-right text-muted"><a href="./single.php"><small>Leer más <i class="fa fa-angle-double-right"></i></small></a></p>
      </div>
      <div class="col-md-4">
        <input class="form-control mb-4" type="text" placeholder="Buscar...">
        <img src="<?php echo get_template_directory_uri() ?>/img/logo-articulo-central.png" alt="" class="img-fluid">
        <a href="./single.php"><h5 class="title mt-4">Aliquip adipisicing minim officia occaecat dolore.</h5></a>
        <img src='https://unsplash.it/800/420?random&blur&gravity=center' class="img-fluid mt-" alt='' />

        <a href="./single.php"><h5 class="title mt-5">Sit eiusmod sit nisi velit est tempor laboris.</h5></a>
        <img src='https://unsplash.it/800/420?random&blur&gravity=center' class="img-fluid mt-" alt='' />
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
            <div class="col mb-4" v-for="n in 4">
              <div class="card border-0">
                <img src="https://unsplash.it/400/300?random&blur&gravity=center" alt="" class="card-img-top">
                <div class="card-body px-0">
                  <p class="card-title"><strong>Velit anim velit occaecat id non proident labore sunt do.</strong><br>
                  <span class="badge badge-primary">Ceda el paso</span> <span class="badge badge-warning">Chóferes</span>
                  <p class="card-text"><small class="muted"><i class="far fa-clock"></i> Publicado: 15 de mayo de 2020</small><br>
                  Elit labore ullamco cillum commodo tempor. Irure ut pariatur adipisicing ea sit adipisicing elit ex quis adipisicing.</p>
                  <p class="text-right text-muted"><a href="./single.php"><small>Leer más <i class="fa fa-angle-double-right"></i></small></a></p>
                </div>
              </div>
            </div>
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
      <div class="col-md-4 pt-4">
        <img src="https://via.placeholder.com/500?text=Ads%20500x500" alt="" class="img-fluid mt-4">
      </div>
    </div>
  </div>
</div>

<?php get_footer() ?>