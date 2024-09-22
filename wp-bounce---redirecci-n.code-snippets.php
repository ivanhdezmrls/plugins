<?php

/**
 * WP Bounce - Redirección
 */
function custom_wp_bouncer_redirect_url( $url ) {
    return esc_url( 'https://escueladeentrenamientomental.com/dont-share' );
}
add_filter( 'wp_bouncer_redirect_url', 'custom_wp_bouncer_redirect_url' );
