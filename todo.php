<?php
/**
 * todo.php - include all file for todo, use instead of phar for development
 *
 * This is released under the MIT, see license.txt for details
 *
 * @author       Elizabeth M Smith <auroraeosrose@gmail.com>
 * @copyright    Elizabeth M Smith (c) 2009-2012
 * @link         http://callicore.net
 * @license      http://www.opensource.org/licenses/mit-license.php MIT
 * @since        Php 5.4.0 GTK 2.24.0
 * @package      callicore
 * @subpackage   todo
 * @filesource
 */

/**
 * Figure out our app location
 */
defined('CALLICORE_TODO') || define('CALLICORE_TODO', (getenv('CALLICORE_TODO') ? getenv('CALLICORE_TODO') : __DIR__ . DIRECTORY_SEPARATOR));

/**
 * Include all todo items
 */
include CALLICORE_TODO . 'app' . DIRECTORY_SEPARATOR . 'Application.php';