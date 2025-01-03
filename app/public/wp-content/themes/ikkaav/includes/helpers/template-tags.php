<?php

function get_the_custom_post_thumbnail($post_id, $size = 'featured-image', $additional_attributes = [])
{
    $custom_thumbnail = '';

    if(null === $post_id) {
        $post_id = get_the_ID();
    }

    if(has_post_thumbnail($post_id)) {
        $default_attributes = [
            'loading' => 'lazy',
            'class' => 'img-fluid'
        ];

        $attributes = array_merge($default_attributes, $additional_attributes);


        $post_thumbnail_id = get_post_thumbnail_id($post_id);
        $custom_thumbnail = wp_get_attachment_image(
            $post_thumbnail_id,
            $size,
            false,
            $additional_attributes
        );
        return $custom_thumbnail;
    }


}

function ikkaav_the_custom_post_thumbnail($post_id, $size = 'post-thumbnail', $additional_attributes = [])
{
    echo get_the_custom_post_thumbnail($post_id, $size, $additional_attributes);
}
