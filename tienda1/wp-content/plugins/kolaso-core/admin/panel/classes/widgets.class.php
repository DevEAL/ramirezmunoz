<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Widgets Class
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! class_exists( 'CSF_Widget' ) ) {
  class CSF_Widget extends WP_Widget {

    public function __construct( $key, $params ) {

      $widget_ops  = array();
      $control_ops = array();

      $this->key  = $key;
      $this->args = apply_filters( "csf_{$key}_args", $params, $this );

      // Set control options
      if( ! empty( $this->args['width'] ) ) {
        $control_ops['width'] = $this->args['width'];
      }

      // Set widget options
      if( ! empty( $this->args['description'] ) ) {
        $widget_ops['description'] = $this->args['description'];
      }

      if( ! empty( $this->args['classname'] ) ) {
        $widget_ops['classname'] = $this->args['classname'];
      }

      // Set filters
      $widget_ops  = apply_filters( "csf_{$key}_widget_ops", $widget_ops, $this );
      $control_ops = apply_filters( "csf_{$key}_control_ops", $control_ops, $this );

      parent::__construct( $key, $this->args['title'], $widget_ops, $control_ops );

    }

    // Register widget with WordPress
    public static function instance( $key, $params = array() ) {
      return new self( $key, $params );
    }

    // Front-end display of widget.
    public function widget( $args, $instance ) {
      call_user_func( $this->key, $args, $instance );
    }

    // Back-end widget form.
    public function form( $instance ) {

      if( ! empty( $this->args['fields'] ) ) {

        echo '<div class="csf csf-widgets csf-fields">';

        foreach( $this->args['fields'] as $field ) {

          $field_value  = '';
          $field_unique = '';

          if( ! empty( $field['id'] ) ) {

            $field_default = ( isset( $field['default'] ) ) ? $field['default'] : '';
            $field_value   = ( isset( $instance[$field['id']] ) ) ? $instance[$field['id']] : $field_default;
            $field_unique  = 'widget-' . $this->key . '[' . $this->number . ']';

          }

          CSF::field( $field, $field_value, $field_unique );

        }

        echo '</div>';

      }

    }

    // Sanitize widget form values as they are saved.
    public function update( $new_instance, $old_instance ) {

      $new_instance = apply_filters( "csf_{$this->key}_save", $new_instance, $this->args, $this );

      do_action( "csf_{$this->key}_save_before", $new_instance, $this->args, $this );

      return $new_instance;

    }
  }
}
