<?php
/**
 * Magic Redirect WordPress Plugin
 *
 * @package MagicRedirect
 * @since 0.0.1
 */

/**
 * Include plugin functionality
 */
add_action(
	'template_redirect',
	function () {
		global $post;
		global $wp;

		$hide_attachments    = magic_get_option( MAGIC_REDIRECT_SLUG . '_attachment_hide', false );
		$attachment_redirect = magic_get_option( MAGIC_REDIRECT_SLUG . '_attachment_redirect', '/' );
		if ( $hide_attachments && is_attachment() ) {
			magic_redirect( '/', 301 );
		}

		$hide_authors    = magic_get_option( MAGIC_REDIRECT_SLUG . '_author_hide', false );
		$author_redirect = magic_get_option( MAGIC_REDIRECT_SLUG . '_author_redirect', '/' );
		if ( $hide_authors ) {
			$url = add_query_arg( array(), $wp->request );
			if ( strpos( $url, 'author' ) === 0 ) {
				magic_redirect( $author_redirect, 301 );
			}

			if ( is_author() ) {
				magic_redirect( $author_redirect, 301 );
			}
		}
	},
	1
);


/**
 * Include Admin interface
 */
if ( is_admin() ) {
	require_once 'admin/dashboard.php';
}
