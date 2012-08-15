<?php
/**
 * Main.php - \Callicore\Lib\Widget\Main
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
 * Namespace for the main window widget for todo
 */
namespace Callicore\Todo\Widget;
use Callicore\Lib\Application as App; // app data
use Callicore\Lib\Widget\Main as Base; // base main class
use Callicore\Lib\Widget\Builder; // gtkbuilder trait
use Gobject; // for registering our type

/**
 * The main window has some built in helpers for
 * a common main layout, including statusbars,
 * accelerators, actions, and more
 *
 * The main layouter can be done by extending the class
 * and implmenting the layout method
 * you can use the gtkbuilder trait for layout as well
 */
class Main extends Base {
use Builder;

}
GObject::register_type('Callicore\Todo\Widget\Main');