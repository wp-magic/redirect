<?php

add_action( 'admin_menu', function () {
  $title = 'Magic Redirect Settings';

  $settings = array(
    array(
      'name' => 'author_hide',
      'type' => 'checkbox',
      'default' => false,
      'label' => 'Hide all author pages',
    ),
    array(
      'name' => 'author_redirect',
      'type' => 'text',
      'default' => '/',
      'label' => 'Redirect author pages to',
    ),
    array(
      'name' => 'attachment_hide',
      'type' => 'checkbox',
      'default' => false,
      'label' => 'Hide all attachment pages',
    ),
    array(
      'name' => 'attachment_redirect',
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
}, 2 );
