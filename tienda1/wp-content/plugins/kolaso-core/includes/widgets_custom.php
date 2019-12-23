<?php
if( ! function_exists( 'zy_widget_form_extend' ) ) :
	/**
	 * Add class field to WP Widget and placed last on the bottom
	 */
	function zy_widget_form_extend( $widget, $return, $instance ) {
		if ( !isset($instance['classes']) )
			$instance['classes'] = null;
			$row = "<p><label for='widget-{$widget->id_base}-{$widget->number}-classes'>CSS Class:</label>\n";
			$row .= "<input type='text' name='widget-{$widget->id_base}[{$widget->number}][classes]' id='widget-{$widget->id_base}-{$widget->number}-classes' class='widefat' value='{$instance['classes']}'/></p>";
			echo $row;
		return $return;
	}
	add_action('in_widget_form', 'zy_widget_form_extend', 10, 3);

	function zy_widget_update( $instance, $new_instance ) {
		$instance['classes'] = $new_instance['classes'];
	return $instance;
	}
	add_filter( 'widget_update_callback', 'zy_widget_update', 10, 2 );

	function zy_dynamic_sidebar_params( $params ) {
		global $wp_registered_widgets;
		$widget_id  = $params[0]['widget_id'];
		$widget_obj = $wp_registered_widgets[$widget_id];
		$widget_opt = get_option($widget_obj['callback'][0]->option_name);
		$widget_num = $widget_obj['params'][0]['number'];

		if ( isset($widget_opt[$widget_num]['classes']) && !empty($widget_opt[$widget_num]['classes']) )
			$params[0]['before_widget'] = preg_replace( '/class="/', "class=\"{$widget_opt[$widget_num]['classes']} ", $params[0]['before_widget'], 1 );
		return $params;
	}
	add_filter( 'dynamic_sidebar_params', 'zy_dynamic_sidebar_params' );
endif;

if( ! function_exists( 'zytheme_load_widget' ) ) :

 function zytheme_load_widget($rewidget){
	register_widget( $rewidget );
 }

endif;