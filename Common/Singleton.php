<?php
/**
 * Abstract singleton class
 *
 * PHP version 7
 * 
 * @category Class
 * @package  CommonEngin
 * @author   Skrip <skrip42@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html CNU General Public License
 * @link     http://github.com/Skrip42
 */

namespace Engin\Common;

/**
 * Abstracted singleton class 
 */
abstract class Singleton
{
    /* store for class instance*/
    protected static $instance;

    /**
     * Disabled constructor
     */
    protected function __construct()
    {
    }

    /**
     * Returned instance of class
     *
     * @return \Engin\Common\SIngleton
     */ 
    public static function getInstance()
    {
        if (empty(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}
?>
