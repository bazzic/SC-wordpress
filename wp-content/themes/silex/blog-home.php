<?php /* Template Name: Blog Home */ ?>
<?php get_header(); ?>
<?php query_posts('post_type=post'); ?>
<?php if ( have_posts() ) : ?>
  <div id="container">
    <div id="content" role="main">
      <?php while ( have_posts() ) : ?>
	<?php the_post(); ?>
	<div class='article'>
	  <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <?php the_excerpt(); ?>
	</div>
      <?php endwhile; ?>
    </div>
    <?php get_sidebar();?>
  </div>
		
<?php endif; ?>
<?php get_footer(); ?>
