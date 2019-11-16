<?php
/**
 * Magic Redirect WordPress Plugin
 *
 * @package MagicRedirect
 * @since 0.0.1
 */

/**
 * Load admin dashboard if needed
 *
 * @since 0.0.1
 */
if ( is_admin() ) {
	require_once 'admin/dashboard.php';
}

/**
 * Include plugin functionality.
 */
add_action(
	'template_redirect',
	function () {
		global $post;
		global $wp;
		global $wp_query;

		$hide_attachments = magic_get_option( MAGIC_REDIRECT_SLUG . '_attachment_hide', false );
		if ( $hide_attachments && is_attachment() ) {
			global $wp_query;
			$wp_query->is_404 = true;
		}

		$hide_authors = magic_get_option( MAGIC_REDIRECT_SLUG . '_author_hide', false );
		if ( $hide_authors ) {
			$url = add_query_arg( array(), $wp->request );
			if ( strpos( $url, 'author' ) === 0 || is_author() ) {
				$wp_query->is_404 = true;
			}
		}
	},
	1
);
