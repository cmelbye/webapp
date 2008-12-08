<?php

class WebApp_Template {
	protected static function _render( $template_name ) {
		if( file_exists( 'templates/' . $template_name . '.phtml' ) ) {
			ob_start();
			require_once "templates/" . $template_name . ".phtml";
			return ob_get_clean();
		} else {
			// fix me
			return false;
		}
	}
	
	public static function render( $template_name, $use_layout = true, $layout = 'default' ) {
		if( $use_layout ) {
			
			$layout_path = 'templates/layouts/' . $layout . '.phtml';
			
			if( !file_exists( $layout_path ) ) {
				return false;
			}
			
			$data = self::_render( $template_name );
			$content_for_layout = $data;
			
			# clean up some things before rendering the view
			unset( $data );
			
			include( $layout_path);
			
		} else {
			$data = self::_render( $template_name );
			echo $data;
		}
	}
}
