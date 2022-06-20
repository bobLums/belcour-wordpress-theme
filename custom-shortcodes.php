<?php
 /*
function render_img( $atts = array() )
{
    extract(shortcode_atts(array(
        'field_name' => ''
        'image_size' => 'full-width'
    ), $atts));
 	return '<?php 
        $image = get_field($field_name);
        $url = $image['url'];
        $size = $image_size; // (thumbnail, medium, large, full or custom size)
        $thumb = $image['sizes'][ $size ];
        $width = $image['sizes'][ $size . '-width' ];
        $height = $image['sizes'][ $size . '-height' ];
        echo esc_url($thumb);
     ?>'
 }
 */
 add_shortcode('renderImg', 'render-img');
?>