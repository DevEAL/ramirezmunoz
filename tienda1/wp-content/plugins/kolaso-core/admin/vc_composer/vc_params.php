<?php
/**
 * Radio image parameter for Visual Composer
 *
 * @package Custom_vc
 *
 * # Usage -
 * array(
 * 'type' => 'radio_image_select',
 * 'options' => array(
 * 'image-1' => plugins_url('../assets/images/patterns/01.png',__FILE__),
 * 'image-2' => plugins_url('../assets/images/patterns/12.png',__FILE__),
 * ),
 * )
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
// add_action( 'vc_after_init', 'vc_after_init_actions' );
 
// function vc_after_init_actions() {
     
//     // Remove VC Elements
//     if( function_exists('vc_remove_element') ){ 
         
//         vc_remove_element('vc_accordion');
         
//     }
     
// }


if ( ! class_exists( 'zy_radio_image_param_alt' ) ) {

	/**
	 * Class ultimate_radio_image_param
	 */
	class zy_radio_image_param_alt {

		/**
		 * Add shortcode parameter for Visual Composer.
		 */
		function __construct() {
			if ( function_exists( 'vc_add_shortcode_param' ) ) {
				vc_add_shortcode_param( 'radio_image_select', array( &$this, 'radio_image_settings_field' ), ZYTHEME_URL . 'admin/js/zytheme_vc_image-picker.js' );
			}
		}

		/**
		 * Parsing settings field.
		 *
		 * @param array $settings Settings array.
		 * @param array $value    Values array.
		 *
		 * @return string
		 */
		function radio_image_settings_field( $settings, $value ) {

			$options      = isset( $settings['options'] ) ? $settings['options'] : '';
			$useextension = ( isset( $settings['useextension'] ) && '' !== $settings['useextension'] ) ? $settings['useextension'] : 'true';
			$simple = ( isset( $settings['simple_mode'] ) && '' !== $settings['simple_mode'] ) ? $settings['simple_mode'] : true;

			$class      = isset( $settings['class'] ) ? $settings['class'] : '';

			$output = $selected = '';
			$css_option = str_replace( '#', 'hash-', vc_get_dropdown_option( $settings, $value ) );

			$output .= '<select name="'
			           . $settings['param_name']
			           . '" class="wpb_vc_param_value wpb-input wpb-select ' . $class
			           . ' ' .$settings['param_name']
			           . ' ' . $settings['type']
			           . ' ' . $css_option
			           . '" data-option="' . $css_option . '">';

			if ( is_array( $options ) ) {
				foreach ( $options as $key => $val ) {
					if ( 'true' !== $useextension ) {
						$temp          = pathinfo( $key );
						$temp_filename = $temp['filename'];
						$key           = $temp_filename;
					}

					if ( '' !== $css_option && $css_option === $key ) {
						$selected = ' selected="selected"';
					} else {
						$selected = '';
					}

					if($simple) {
						$tooltip = $key;
						$img_url = $val;
					} else {
						$tooltip = $val['tooltip'];
						$img_url = $val['src'];
					}

					$output .= '<option data-tooltip="'.esc_attr($tooltip).'"  data-img-src="' . esc_url($img_url) . '"  value="' . esc_attr($key) . '" ' . $selected . '>';
				}
			}
			$output .= '</select>';

			return $output;
		}
	}

	$zy_radio_image_param_alt = new zy_radio_image_param_alt();
}


if(!class_exists('toggle_checkbox_param')) {

	class toggle_checkbox_param {

		function __construct() {
			if(function_exists('vc_add_shortcode_param')) {
				vc_add_shortcode_param('toggle_checkbox' , array($this, 'toggle_checkbox'));
			}
		}

		function toggle_checkbox($settings, $value) {
			$param_name = isset($settings['param_name']) ? $settings['param_name'] : '';
			$type = isset($settings['type']) ? $settings['type'] : '';
			$options = isset($settings['options']) ? $settings['options'] : '';
			$class = isset($settings['class']) ? $settings['class'] : '';

			$output = $checked = '';

			if(is_array($options) && !empty($options)) {
				foreach($options as $key => $opts){
					$checked = "";
					$animation_class = 'right-active';
					$data_val = $key;
					if($value == $key){
						$checked = "checked";
						$animation_class = '';
					}

					$uniq_id = uniqid('toggle_checkbox-'.rand());
					if(isset($opts['label']))
						$label = $opts['label'];
					else
						$label = '';

					$output .= '
					<div class="toggle_checkbox_wrap">
						<input type="checkbox" name="'.esc_attr($param_name).'" value="'.esc_attr($value).'" class="wpb_vc_param_value ' . esc_attr($param_name) . ' ' . esc_attr($type) . ' ' . esc_attr($class) . '" id="'.esc_attr($uniq_id).'" '.$checked.'>
						<label class="toggle_checkbox" for="'.esc_attr($param_name).'" data-value="'.esc_attr($data_val).'">
							<span class="button-animation '.esc_attr($animation_class).'"></span>
						</label>
						<span class="param-title">'.esc_html($label).'</span>
					</div>';
				}
			}

			$output .= '
			<script type="text/javascript">
				jQuery("#'.esc_js($uniq_id).'").next(".toggle_checkbox").click(function(){
					var $self = jQuery(this),
					$button = $self.find(".button-animation"),
					$checkbox = $self.siblings("#'.esc_js($uniq_id).'");
					$button.toggleClass("right-active");
					if($self.find(".button-animation").hasClass("right-active")) {
						$checkbox.removeAttr("checked").val("");
					} else {
						$checkbox.attr("checked","checked").val($self.data("value"));
					}
					$checkbox.trigger("change");
				});
			</script>';

			return $output;
		}
	}

	$toggle_checkbox_param = new toggle_checkbox_param();
}


if(!class_exists('zy_number_param')) {
	class zy_number_param {
		function __construct() {
			if(function_exists('vc_add_shortcode_param')) {
				vc_add_shortcode_param('number' , array(&$this, 'number_settings_field' ));
			}
		}

		function number_settings_field($settings, $value){
			$param_name = isset($settings['param_name']) ? $settings['param_name'] : '';
			$type = isset($settings['type']) ? $settings['type'] : '';
			$min = isset($settings['min']) ? $settings['min'] : '';
			$max = isset($settings['max']) ? $settings['max'] : '';
			$step = isset($settings['step']) ? $settings['step'] : '';
			$suffix = isset($settings['suffix']) ? $settings['suffix'] : '';
			$class = isset($settings['class']) ? $settings['class'] : '';
			$output = '<input type="number" min="'.esc_attr($min).'" max="'.esc_attr($max).'" step="'.esc_attr($step).'" class="wpb_vc_param_value ' . esc_attr($param_name . ' ' . $type . ' ' . $class) . '" name="' . esc_attr($param_name) . '" value="'.$value.'" />'.strip_tags($suffix,'<i><span>');
			return $output;
		}

	}

	$zy_number_param = new zy_number_param();
}


//Mulitselect Categories Param
if(	!	class_exists('zy_mulitselect_portfolio_param')) {

	class zy_mulitselect_portfolio_param {

		function __construct() {
			if(function_exists('vc_add_shortcode_param')) {
				vc_add_shortcode_param( 'mulitselect_portfolio', array( &$this, 'mulitselect_portfolio' ), ZYTHEME_URL .'admin/js/zytheme_vc_multiple.js' );
			}
		}

		function mulitselect_portfolio($settings, $value) {

			$options = array();

      $categories = get_terms(array(
					'taxonomy' => 'portfolio_category',
          'hide_empty' => false,
          'hierarchical' => true
      ));

			$walker = new VCategoryWalker();
      $walker->walk($categories, 3);

        foreach($walker->cache as $val) {
            $options[] = array(
                'value'     => $val['id'],
                'text'      => $val['title'],
                'class'     => 'indent_' . $val['depth']
            );
        }

      $options = json_encode($options);

			return
			"<div class='mulitselect-input'>
					<input name='{$settings['param_name']}'  type=\"text\" id=\"input-sortable\" class=\"input-sortable wpb_vc_param_value wpb-input{$settings['param_name']} {$settings['type']}_field\" value=\"{$value}\">
					<div class=\"data-option\" style=\"display: none;\">
							{$options}
					</div>
			</div>";

		}
	}

	$zy_mulitselect_portfolio_param = new zy_mulitselect_portfolio_param();
}
