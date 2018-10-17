<?php
/**
 * Common factory class
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
 * Base Abstract class Factory
 */
abstract class Factory
{
    protected static $instances = [];

    /**
     * Disable constructor
     *
     * @param mixed ...$params one or more params
     */
    protected function __construct(...$params)
    {
    }

    /**
     * Return instance of class
     *
     * @param mixed ...$params one or more params
     *
     * @return \Engin\Common\Factory
     */
    public static function getInstance(...$params)
    {
        $hash = serialize($params);
        $className = get_called_class();
        if (!isset(static::$instances[$className])) {
            static::$instances[$className] = [];
        }
        if (empty(static::$instances[$className][$hash])) {
            static::$instances[$className][$hash] = new static(...$params);
        }
        return static::$instances[$className][$hash];
    }
}
?>
