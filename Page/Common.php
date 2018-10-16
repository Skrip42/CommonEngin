<?php
/**
 * Common Page class
 *
 * PHP version 7
 * 
 * @category Class
 * @package  CommonEngin
 * @author   Skrip <skrip42@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html CNU General Public License
 * @link     http://github.com/Skrip42
 */
namespace Engin\Page;

/**
 * Abstract class for page
 */
abstract class Common extends \Engin\Common\Singleton
{
    /**
     * Drow page
     *
     * @return string 
     */
    abstract public function render();
}
?>
