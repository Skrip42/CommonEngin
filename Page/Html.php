<?php
/**
 * Base html Page
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
 * Base html string
 */
abstract class Html extends \Engin\Page\Common
{
    protected $header;
    protected $body;
    protected $lang = 'ru';

    /**
     * Construct.
     * Initialize header and body block
     */
    protected function __construct()
    {
        $this->header = new \Engin\Block\Header();
        $this->body = new \Engin\Block\Body();
    }

    /**
     * Return html string
     *
     * @return string
     */
    public function render() 
    {
        $this->build();
        $string  = '<!DOCTYPE html>';
        $string .= '<html lang=' . $this->lang . '>';
        $string .= $this->header->getHtml();
        $string .= $this->body->getHtml();
        $string .= '</html>';
        return $string;
    }

    /**
     * Main function
     *
     * @return null
     */
    abstract protected function build();
}
?>
