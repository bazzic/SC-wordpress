<?php query_posts('post_type=post'); ?>
<?php if ( have_posts() ) : ?>
	<ul id="sidebar" class="section">
	  <li class="widget">
	  <h2 class="widgettitle">Blog posts</h2>
	  <ul>
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<?php $category = get_the_category(); ?>
			
			<li>
				<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
			</li>
		<?php endwhile; ?>
		</ul></li>
	</ul>
<?php endif; ?>