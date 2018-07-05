<?php

add_action( 'admin_menu', function () {
  $title = 'Magic Redirect Settings';

  $settings = array(
    array(
      'name' => 'magic_redirect_author_hide',
      'type' => 'checkbox',
      'default' => false,
      'label' => 'Hide all author pages',
    ),
    array(
      'name' => 'magic_redirect_author_redirect',
      'type' => 'text',
      'default' => '/',
      'label' => 'Redirect author pages to',
    ),
    array(
      'name' => 'magic_redirect_attachment_hide',
      'type' => 'checkbox',
      'default' => false,
      'label' => 'Hide all attachment pages',
    ),
    array(
      'name' => 'magic_redirect_attachment_redirect',
      'type' => 'text',
      'default' => '/',
      'label' => 'Redirect attachment pages to',
    ),
  );

  magic_dashboard_add_submenu_page( array (
    'link' => 'Redirects',
    'slug' => MAGIC_REDIRECT_SLUG,
    'title' => $title,
    'settings' => $settings,
   ) );
} );
