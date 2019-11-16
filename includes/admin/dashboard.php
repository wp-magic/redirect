<?php
/**
 * Add Magic Redirect Menu to WordPress Admin
 *
 * @package MagicRedirect
 * @since 0.0.1
 */

add_action(
	'admin_menu',
	function () {
		$title = 'Magic Redirect Settings';

		$settings = array(
			array(
				'name'    => 'author_hide',
				'type'    => 'checkbox',
				'default' => false,
				'label'   => 'Hide all author pages',
			),
			array(
				'name'    => 'attachment_hide',
				'type'    => 'checkbox',
				'default' => false,
				'label'   => 'Hide all attachment pages',
			),
		);

		magic_dashboard_add_submenu_page(
			array(
				'link'     => 'Redirects',
				'slug'     => MAGIC_REDIRECT_SLUG,
				'title'    => $title,
				'settings' => $settings,
				'action'   => MAGIC_REDIRECT_POST_SETTINGS_ACTION,
			)
		);
	},
	2
);
