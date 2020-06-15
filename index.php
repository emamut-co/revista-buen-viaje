<?php get_header();

$do_not_duplicate = array();
$sticky = get_option( 'sticky_posts' );

$articuloCentralArray = new WP_Query(
  array(
    'post_type'           => 'post',
    'post__in'            => $sticky,
    'post_status'         => 'publish',
    'posts_per_page'      => 3,
    'orderby'             => 'rand',
    'ignore_sticky_posts' => 1
  )
);

$args = array(
  'taxonomy' => 'category',
  'hide_empty' => 0
);
$categoriesArray = get_categories($args);
$isDark = false ?>

<section class="container p-4 bg-light">
  <div class="row">
    <div class="col-md-8" id="main-note">
      <a href="<?php echo get_permalink($articuloCentralArray->posts[0]->ID) ?>">
        <h2 class="title"><?php echo $articuloCentralArray->posts[0]->post_title ?></h2>
      </a>
      <div class="text-center">
        <a href="<?php echo get_permalink($articuloCentralArray->posts[0]->ID) ?>">
          <img src='<?php echo get_the_post_thumbnail_url($articuloCentralArray->posts[0]->ID, 'full') ?>' class="img-fluid mt-2" alt='' />
        </a>
      </div>
      <p class="card-text mt-3">
        <small class="muted"><i class="far fa-clock"></i> Publicado: <?php echo date_i18n('d \d\e F Y g:i', strtotime($articuloCentralArray->posts[0]->post_date)) ?></small><br>
        Por: <a href="<?php echo esc_url(get_author_posts_url($articuloCentralArray->posts[0]->post_author)) ?>"><?php echo get_the_author_meta('display_name', $articuloCentralArray->posts[0]->post_author) ?></a>
        <p>
          <?php echo get_the_excerpt($articuloCentralArray->posts[0]->ID) ?></small>
        </p>
      </p>
    </div>
    <div class="col-md-4">
      <?php unset($articuloCentralArray->posts[0]);
      $articuloCentralArray->posts = array_values($articuloCentralArray->posts);

      while ( $articuloCentralArray->have_posts() ) : $articuloCentralArray->the_post(); $do_not_duplicate[] = get_the_ID(); ?>
        <a href="<?php the_permalink() ?>">
          <div class="card main-side border-0 mb-5">
            <div class="card-body p-0">
              <h5 class="card-title"><?php the_title(); $do_not_duplicate[] = get_the_ID() ?></h5>
            </div>
            <?php the_post_thumbnail('medium', ['class' => 'card-img-top']) ?>
          </div>
        </a>
      <?php endwhile ?>
    </div>
  </div>
</section>
<div class="row">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <?php foreach($categoriesArray as $category):
          if(get_field('home', $category)):
            $image = get_field('imagen', $category); ?>
            <section class="p-4 mb-4 <?php if($isDark) echo 'bg-dark' ?>">
              <div class="row">
                <div class="col">
                  <a href="<?php echo get_site_url() . '/category/' . $category->slug ?>"><img src="<?php echo $image['url'] ?>" alt="" class="img-fluid"></a>
                </div>
              </div>
              <div class="row row-cols-1 row-cols-md-2 mt-4">
                <?php $categoryPosts = new WP_Query(array('category_name' => $category->slug, 'posts_per_page' => 4, 'post__not_in' => $do_not_duplicate));
                while ( $categoryPosts->have_posts() ) : $categoryPosts->the_post(); $do_not_duplicate[] = get_the_ID(); ?>
                <div class="col mb-4">
                  <div class="card border-0 bg-transparent">
                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium', ['class' => 'card-img-top']) ?></a>
                    <div class="card-body px-0">
                      <a href="<?php the_permalink() ?>">
                        <h4 class="card-title <?php if($isDark) echo 'text-white' ?>"><?php the_title() ?></h4>
                      </a>
                    </div>
                  </div>
                </div>
                <?php endwhile; wp_reset_postdata() ?>
              </div>
            </section>
          <?php $isDark = $isDark ? false : true;
          endif;
        endforeach ?>
      </div>
      <div class="col-md-4 pt-4">
        <?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
          <?php dynamic_sidebar( 'custom-side-bar' ); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer() ?>