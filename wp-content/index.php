<?php
// Silence is golden.
function custom_function_name( $parameter ) {
    // Your custom code here
    return $modified_parameter;
}
add_filter( 'filter_name', 'custom_function_name' );
