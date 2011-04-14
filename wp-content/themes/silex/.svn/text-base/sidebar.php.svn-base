<?php query_posts('post_type=post'); ?>
<?php if ( have_posts() ) : ?>
	<ul id="sidebar" class="section">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<?php $category = get_the_category(); ?>
			<li class="sidebar_item<?php echo ' '.$category[0]->cat_name;?>">
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				<?php the_content(); ?>
			</li>
		<?php endwhile; ?>
	<?php endif; ?>
	</ul>
<?php endif; ?>