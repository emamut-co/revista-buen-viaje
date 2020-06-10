<?php get_header(); ?>

<div class="container">
  <div class="row mt-4">
    <div class="col-md-8">
      <h1> <?php single_cat_title() ?> </h1>
      <?php if (have_posts()) : ?>
        <div class="row row-cols-1 row-cols-md-2 mt-4">
          <?php while (have_posts()) : the_post(); ?>
            <div class="col mb-4">
              <div class="card">
                <?php the_post_thumbnail('medium', ['class' => 'card-img-top']) ?>
                <div class="card-body">
                  <h4 class="card-title"><?php the_title() ?></h4>
                  <p class="card-text mt-1"><small class="muted"><i class="far fa-clock"></i> Publicado: <?php the_time('d \d\e F Y g:i'); ?></small></p>
                  <?php the_excerpt();?>
                  <p class="text-right text-muted"><a href="<?php the_permalink() ?>"><small class="text-secondary">Leer más <i class="fa fa-angle-double-right"></i></small></a></p>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
        <div class="row">
          <div class="col">
            <?php echo do_shortcode('jetpack-related-posts') ?>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <?php emamut_numeric_posts_nav(); ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
    <div class="col-md-4">
      <?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
        <?php dynamic_sidebar( 'custom-side-bar' ); ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>