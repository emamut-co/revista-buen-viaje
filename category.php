<?php get_header();

$term = get_queried_object();
$image = get_field('imagen', $term) ?>

<div class="container">
  <div class="row mt-3">
    <div class="col-md-8">
      <?php if(!empty($image['url'])): ?>
        <img src="<?php echo $image['url']; ?>" alt="" class="img-fluid">
      <?php else: ?>
        <h1> <?php single_cat_title() ?> </h1>
      <?php endif ?>
      <?php if (have_posts()) : ?>
        <div class="row row-cols-1 row-cols-md-3 mt-5">
          <?php while (have_posts()) : the_post(); ?>
            <div class="col mb-4">
              <div class="card">
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium', ['class' => 'card-img-top']) ?></a>
                <div class="card-body">
                  <a href="<?php the_permalink() ?>"><h4 class="card-title"><?php the_title() ?></h4></a>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
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