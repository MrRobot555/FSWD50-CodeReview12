<?php get_header(); ?>
<div class="container">

  <div class="row">
    <div class="col-xs-12 col-sm-8 px-0">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  <!-- loop through the posts -->
    <div class="col-sm-4 px-2 mx-0 float-left">
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

  <div class="col-xs-12 col-sm-4 px-0 mx-0">
      <?php get_sidebar(); ?>
  </div>

  </div>
</div>
<?php get_footer(); ?>