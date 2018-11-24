<!-- BLOG ENTRY (POST) -->

<?php get_header(); ?>
 
<div class="container">
	<div class="row ">
	   <div class="col-md-12">    
	      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_post_thumbnail() ?>
		<div class="row ">				
			<div class="col-md-8">
		         <h1 class="my-3"><?php the_title(); ?></h1>
		         <div class="entry">
		            <?php the_content(); ?>
		         </div>
	     	</div>
	     	<div class="col-md-4">
       			<?php get_sidebar( 'primary' ); ?>
       		</div>
       	</div>
	      <?php endwhile; endif; ?>
       </div>

	</div>
</div>
 
<?php get_footer(); ?>


