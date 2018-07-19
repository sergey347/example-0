<?php

/**
 * @author Serhii Semypiadnyi
 * @package People’s Travel Sorter
 *
 * @file
 * Implementation of class / interface auto-loading.
 */

/**
 * Light implementation of class / interface auto-loading (PSR-4).
 *
 * @param string $class The fully-qualified class name.
 * @return void
 */
spl_autoload_register(function ($class) {

  // Clean-up namespace prefix.
  $class = str_replace('Company\\', '', $class);

  // Determine base directory for classes / interfaces.
  $type = (strstr($class, 'Interface') !== FALSE)
    ? 'interfaces' : 'classes';

  $base_dir = __DIR__ . "/src/$type/";

  // Path to file.
  $file = "{$base_dir}{$class}.php";

  // Require file if it exists.
  if (file_exists($file)) {
    require $file;
  }

});
