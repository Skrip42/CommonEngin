<?php
/**
 * Common loger
 *
 * PHP version 7
 * 
 * @category Class
 * @package  CommonEngin
 * @author   Skrip <skrip42@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html CNU General Public License
 * @link     http://github.com/Skrip42
 */
namespace Engin\Logger;

/**
 * Base Logger class
 */
abstract class Common extends \Engin\Common\Singleton
{
    /**
     * Set message
     *
     * @param string $message Message to log
     *
     * @return null
     */
    abstract public function send(string $message);
}

?>
