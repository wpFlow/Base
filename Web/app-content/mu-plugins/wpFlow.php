<?php
/**
 * Plugin Name: wpFlow Bootstrap
 * Plugin URI: https://github.com/wpFlow/
 * Description: Initialize the wpFlow Bootstrap Process
 * Version: 1.0.0
 * Author: wpFlow
 * Author URI: https://vectoholic.com/
 * License: MIT License
 */

$context = WPFLOW_CONTEXT ?: 'Development';
$bootstrap = \wpFlow\Core\Bootstrap::boot($context);
$bootstrap->run();