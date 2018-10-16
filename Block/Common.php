<?php
/**
 * Base html block
 *
 * PHP version 7
 * 
 * @category Class
 * @package  CommonEngine
 * @author   Skrip <skrip42@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html CNU General Public License
 * @link     http://github.com/Skrip42
 */    
namespace Engin\Block;

/**
 * Abstract html block
 */
abstract class Common
{
    /**
     * Return html string
     *
     * @return string
     */
    abstract public function getHtml();
}
?>
