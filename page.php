<?php get_header(); ?>

<div class="container">
  <div class="row mt-4">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="col-md-8">
      <h2 class="title"><?php the_title() ?></h2>
      <?php the_post_thumbnail('full', ['class' => 'img-fluid']) ?>
      <?php get_template_part( 'template-parts/content', 'page' ); ?>
    </div>
    <div class="col-md-4">
      <?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
        <?php dynamic_sidebar( 'custom-side-bar' ); ?>
      <?php endif; ?>
    </div>
    <?php endwhile; ?>
  <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>