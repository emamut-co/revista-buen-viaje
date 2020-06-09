<?php get_header(); ?>

<div class="container">
  <div class="row mt-4">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="col-md-8">
      <h2 class="title"><?php the_title() ?></h2>
      <?php the_post_thumbnail('full', ['class' => 'img-fluid']) ?>
      <p class="mt-1">
        <!-- <span class="badge badge-primary">Ceda el paso</span> <span class="badge badge-warning">Chóferes</span><br> -->
        <p class="card-text"><small class="muted"><i class="far fa-clock"></i> Publicado: <?php the_time('d \d\e F Y g:i'); ?></small><br>
      </p>
      <?php the_content();?>
    </div>
    <div class="col-md-4 pt-4">
      <img src="https://via.placeholder.com/500?text=Ads%20500x500" alt="" class="img-fluid mt-4">
    </div>
    <?php endwhile; ?>
  <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>