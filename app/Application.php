<?php
/**
 * Application.php - \Callicore\Todo\Application
 *
 * This is released under the MIT, see license.txt for details
 *
 * @author       Elizabeth M Smith <auroraeosrose@gmail.com>
 * @copyright    Elizabeth M Smith (c) 2012
 * @link         http://callicore.net
 * @license      http://www.opensource.org/licenses/mit-license.php MIT
 * @since        Php 5.4.0
 * @package      callicore
 * @subpackage   todo
 * @filesource
 */
 
/**
 * Namespace for application
 */
namespace Callicore\Todo;
use Callicore\Lib\Application as App;
use Callicore\Lib\Widget\Splash;
use GtkWindow;

/**
 * Application class for TODO
 *
 * Handles startup, shutdown, autoload registration and a host of other important
 * functionality
 */
class Application extends App {

    /**
     * string version
     *
     * @var string
     */
    const VERSION = '1.0.0-dev';

    /**
     * A name for the application
     *
     * @var string
     */
    protected $name = 'ToDo';

    /**
     * Startup method for the todo application
     *
     * @return void
     */
    public function main(){
        $main = new GtkWindow();
        $splash = new Splash(4, $this);
        $splash->set_image(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'etc' . DIRECTORY_SEPARATOR . 'splash.png');
        $splash->set_license('The MIT License');
        $splash->set_copyright('Elizabeth M Smith (c) 2012');
        $splash->set_version(static::VERSION);
        $splash->show_all();
        $splash->update('Syncing');
        sleep(2);
        $splash->update('Loading Items');
        sleep(2);
        $splash->update('Creating Display');
        sleep(2);
        $splash->update('Notifications');
        sleep(2);
        $main->connect_simple('destroy',array($this,'quit'));
        $main->show_all();
        $splash->destroy();
    }
}