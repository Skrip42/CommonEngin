<?php
/**
 * Base body
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
class Body extends \Engin\Block\Compose
{
    /**
     * Return html body string
     *
     * @return string
     */
    public function getHtml() 
    {
        $string = '<body>';
        $string .= parent::getHtml();
        $string .= '</body>';
        return $string;
    }
}
?>
