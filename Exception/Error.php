<?php
/**
 * Base Error Exception class
 *
 * PHP version 7
 * 
 * @category Class
 * @package  CommonEngin
 * @author   Skrip <skrip42@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html CNU General Public License
 * @link     http://github.com/Skrip42
 */
namespace Engin\Exception;

/**
 * Abstract Error Exception Class
 */
abstract class Error extends \ErrorException
{
    /* severity level*/
    protected $severity = \E_USER_ERROR;

    /**
     * Construct for Autoloader
     *
     * @param string $message message to print;
     */
    public function __construct(string $message = '')
    {
        parent::__construct($message, 0, \E_USER_ERROR);
    }
}
?>
