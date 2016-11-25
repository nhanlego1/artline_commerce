<?php

/**
 * Preprocess variables for html.tpl.php
 *
 * @see system_elements()
 * @see html.tpl.php
 */


/**
 * Override or insert variables into the page template for HTML output.
 */
function artline_store_process_html(&$variables) {
    // Hook into color.module.
    if (module_exists('color')) {
        _color_html_alter($variables);
    }
}

/**
 * get color key
 */
function artline_color_key(){
    if(variable_get('color_artline_store_palette')){
        $color = variable_get('color_artline_store_palette');
        return $color['bg'];
    }else{
        return '#336699';
    }


}
