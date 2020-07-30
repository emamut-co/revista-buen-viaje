<?php get_header(); ?>

<div class="container">
  <div class="row mt-4">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="col-md-8">
      <h2 class="title"><?php the_title() ?></h2>
      <?php the_post_thumbnail('full', ['class' => 'img-fluid']) ?>
      <p class="mt-1">
        <p class="card-text text-muted">
          <i class="far fa-clock"></i> <?php the_time('d \d\e F Y g:i'); ?> por: <?php the_author_posts_link() ?><br>
          <?php the_tags('', ' • ') ?>
        </p>
      </p>
      <?php the_content(); ?>
    </div>
    <div class="col-md-4">
      <?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
        <?php dynamic_sidebar( 'custom-side-bar' ); ?>
      <?php endif; ?>
    </div>
    <?php endwhile; ?>
  <?php endif; ?>
  </div>
  <div class="row mb-4">
    <div class="col text-center">
      <?php echo adrotate_ad(5); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>