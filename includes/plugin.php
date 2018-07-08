<?php

require_once 'redirect.php';

if ( is_admin() ) {
  require_once 'admin/dashboard.php';
}
