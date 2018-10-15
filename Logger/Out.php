<?php
/**
 * Logger class. Just print message to page. 
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
 * Logger to file
 * */
class Out extends \Engin\Logger\Common
{
    /**
     * Set message
     *
     * @param string $message Message to log
     *
     * @return null
     */
    public function send(string $message)
    {
        echo $message;
    }
}

?>
