<?php 

//Custom Style Frontend
if(!function_exists('sandbox_color_scheme')){
    function sandbox_color_scheme(){
        $color_scheme = '';

        //Main Color
        if( sandbox_get_option('main_color') != '#fe8423' ){
            $color_scheme = 
            '
        /****Main Color****/

        	/*Background Color*/
            {background:'.sandbox_get_option('main_color').';}

            /*Border Color*/
            {border-color:'.sandbox_get_option('main_color').';}

            /*Color*/
            {color: '.sandbox_get_option('main_color').';}

			';
        }

        if(! empty($color_scheme)){
			echo '<style type="text/css">'.$color_scheme.'</style>';
		}
    }
}
add_action('wp_head', 'sandbox_color_scheme');

//Custom Second Font
if(!function_exists('sandbox_second_font')){
      function sandbox_second_font(){
            $value = sandbox_get_option( 'second_font', [] );

            if ( $value['font-family'] != 'Inter') {
            $second_font = 
            '{font-family: '.sprintf( $value['font-family'] ).';}
            ';
            }

            if(! empty($second_font)){
                  echo '<style type="text/css">'.$second_font.'</style>';
            }
      }
}
add_action('wp_head', 'sandbox_second_font');