<h2>Jobs</h2>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class='article-teaser'>
<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<p><?php the_content(); ?></p>
</div>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
