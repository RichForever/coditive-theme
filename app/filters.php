<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});


/**
 * Change ACF JSON path
 * 
 * @return string
 */
add_filter('acf/settings/save_json', function($path) {
    $path = get_stylesheet_directory() . '/resources/acf-json';
    return $path;
});