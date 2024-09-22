<?php

/**
 * WP Bounce - Redirección
 */
function custom_wp_bouncer_redirect_url( $url ) {
    return esc_url( 'https://yourpersonalurl.com/' );
}
add_filter( 'wp_bouncer_redirect_url', 'custom_wp_bouncer_redirect_url' );
