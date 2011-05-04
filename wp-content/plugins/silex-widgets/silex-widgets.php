<?php
/*
Plugin Name: Silex Widgets
Plugin URI: http://silex-consulting.com/
Description: Silex widgets
Version: 1.0.0
*/

function widget1_render() {
?>
  <li id="splash" class='widget widget_splash'>
    <h2><span>Open thinking</span></h2>
    <img src="<?php bloginfo('template_directory'); ?>/image/sr_splash_underlay.png" width="276" alt="" />
  </li>
<?php
}

class Category_Widget extends WP_Widget {
  function Category_Widget() {
    $widget_ops = array( 'classname' => 'blog-category', 'description' => __('List blog posts within the selected category.', 'category') );
  
    $control_ops = array('id_base' => 'category-widget' );
  
    $this->WP_Widget( 'category-widget', __('Posts in Category', 'category'), $widget_ops, $control_ops );
  }
  
  function widget( $args, $instance ) {
    extract( $args );
    $title = apply_filters('widget_title', $instance['title'] );
    $category = $instance['category'];
    
    echo "<li class='widget cat_view_widget'>";
    
    if ( $title )
      echo "<h2>$title</h2>";
      
    echo "<ul>";
    
    global $post;
    $args = array('category' => $category );
    $posts = get_posts($args);  
      
    foreach( $posts as $post ) {
      setup_postdata($post); ?>
	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php }
    echo '</ul></li>';      
      
      
  }
    
  function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    
    /* Strip tags for title and name to remove HTML (important for text inputs). */
    $instance['title'] = strip_tags( $new_instance['title'] );
    $instance['category'] = strip_tags( $new_instance['category'] );
    
    return $instance;
  }    


  function form( $instance ) {
  
    /* Set up some default widget settings. */
    $defaults = array( 'title' => __('Posts in Category', 'category-widget'));
    $instance = wp_parse_args( (array) $instance, $defaults ); ?>
    
    <!-- Widget Title: Text Input -->
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'hybrid'); ?></label>
      <input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
    </p>
    
    <p>
    <?php wp_dropdown_categories(array('hide_empty' => 0, 'name' => $this->get_field_name( 'category' ), 'id' => $this->get_field_id( 'category' ), 'hierarchical' => true, 'selected' => $instance['category'])); ?>
    </p>
    <?php
  }    
  
}

function silexWidget_init() {
  wp_register_sidebar_widget('sw1', 'Silex Widget 1', 'widget1_render');	// image splash
}

function category_load_widgets() {
  register_widget( 'Category_Widget' );
}

add_action("plugins_loaded", "silexWidget_init");
add_action( 'widgets_init', 'category_load_widgets' );