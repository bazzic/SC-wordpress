<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
//print_r(get_defined_vars()); die();
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="<?php bloginfo('template_directory'); ?>/js/cufon-yui.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/FoundryFormSans.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/syfy-regular.font.js" type="text/javascript"></script>
<script type="text/javascript">
// Cufon.replace('.menu ul li a', { fontFamily: 'FoundryFormSans'	});
// Cufon.replace('#content h2', { fontFamily: 'FoundryFormSans', color: '#318ad9' });
// Cufon.replace('#content h3', { fontFamily: 'FoundryFormSans', color: '#318ad9' });
// Cufon.replace('.news_item h3', { fontFamily: 'FoundryFormSans', color: '#ffffff' });
// Cufon.replace('h1', { fontFamily: 'FoundryFormSans' });
</script>

<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_head();
?>
<script type='text/javascript'>
(function($) {
	$.fn.buttonise = function() {
		$(this).click(function() {
			window.location = $(this).find('a').attr('href');
		});
		return $(this);
	}
	$(document).ready(function() {
		$('p.jobs-applynow').buttonise();
		$('.menu ul li.page_item').buttonise();
	});
})(jQuery);
</script>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper" >
		<div id="header" class="header">
			<div id="masthead">
				<div id="branding" role="banner">
					<a id="site-title" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php 
						$logo_url = get_bloginfo('template_directory') . '/image/';
						$logo_url .= 'sc_logo.png';
						?>
						<img src="<?php echo $logo_url; ?>" alt="<?php bloginfo( 'name' ); ?>" />
					</a>
				</div>
					
				<div id="access" role="navigation">
					<?php /* Our navigation menu.  If one isn't filled out,
					wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used. 
					 If none is assigned, the menu with the lowest ID is used.  */ ?>
					<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
				</div>
			</div><!-- #masthead -->
		</div><!-- #header -->
		<?php if(is_front_page()): ?>
		<div id="splash-front">
			<img src="<?php bloginfo('template_directory'); ?>/image/sr_splash_underlay.png" alt="" />
			<?php echo sr_template_tagline(); ?>
		</div><!--  #splash  -->
		<?php endif; ?>
	<div id="main">
		