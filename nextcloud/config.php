<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' =>
  array (
    0 =>
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 =>
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'passwordsalt' => 'fgeszilJURR/9R/g6/8S2hRTCGInGi',
  'secret' => 'B8DthaRRqUgM1X/VcJIBmt81fBIh0p8ucU7/vUxJatKsgo8g',
  'trusted_domains' =>
  array (
    0 => 'cl.njbs.dev',
  ),
  'datadirectory' => '/var/www/html/data',
  'encryption_skip_signature_check' => true,
  'dbtype' => 'mysql',
  'version' => '19.0.10.1',
  'overwrite.cli.url' => 'http://localhost',
  'dbname' => 'nextcloud',
  'dbhost' => 'db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => '16d55469ac05472c96220105b6e4976f',
  'instanceid' => 'oc0esm7j8nm0',
  'installed' => true,
  'theme' => '',
  'loglevel' => 2,
  'maintenance' => false,
);