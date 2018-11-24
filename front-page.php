<?php get_header(); ?>
<div class="container">
  <div class="row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  <!-- loop through the posts -->
    <div class="col-md-4">
      <a href="<?php the_permalink() ?>">
        <?php the_post_thumbnail() ?> <!-- print post images -->
      </a>
      <a href="<?php the_permalink() ?>">
          <h3 class="mt-2">
            <?php the_title(); ?>
          </h3> <!-- print the title of the blog post -->
      </a>
      <?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>">READ MORE... </a>  <!-- print the content of the blog post -->
    </div>
    <?php endwhile;  endif;?>
  </div>
</div>
<?php get_footer(); ?>