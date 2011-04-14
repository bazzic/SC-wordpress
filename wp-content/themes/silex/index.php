<?php get_header(); ?>
<?php // query_posts('post_type=page'); ?>
<?php if ( have_posts() ) : ?>
		<div id="container">
			<div id="content" role="main">
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<div class='article'>
					<?php if(!is_front_page()): ?>
						<h2><?php the_title(); ?></h2>
					<?php endif; ?>
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
			</div>
			<?php get_sidebar();?>
		</div>
<?php endif; ?>
<?php get_footer(); ?>
