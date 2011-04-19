<?php get_header(); ?>
<?php // query_posts('post_type=page'); ?>
<?php if ( have_posts() ) : ?>
		<div id="container">
		  <?php if(!is_front_page()): ?>
		  <div id="splash">
        <h1><span>Open thinking</span></h1>
        <img src="<?php bloginfo('template_directory'); ?>/image/sr_splash_underlay.png" width="276" alt="" />
      </div><!--  #splash  -->
      <?php endif; ?>
			<div id="content" role="main">
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<div class='article'>
					<?php if(!is_front_page()): ?>
						<h2><?php the_title(); ?></h2>
					<?php endif; ?>
					<?php the_content(); ?>
					<?php if(is_singular('post')): ?>
					  <div class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <span class="tiny-category"><?php the_category(', ') ?></span></span></div>
            </div>
            <?php comments_template(); ?>
          <?php endif; ?>
				</div>
			<?php endwhile; ?>
			</div>
			
			<?php get_sidebar();?>
			
		</div>
		
<?php endif; ?>
<?php get_footer(); ?>
