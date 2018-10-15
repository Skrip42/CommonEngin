<?php
/**
 * Exception Unexepted Class
 * Exception for Autoload
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
 * Exception for unexepted class
 */
class Unexepted extends \Engin\Exception\Error
{
    /**
     * Constructor.
     *
     * @param string $className name of unexepted class
     */
    public function __construct(string $className)
    {
        parent::__construct('Unexepted class: ' . $className);
    }
}
?>
