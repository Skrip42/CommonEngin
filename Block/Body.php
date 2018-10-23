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
    /* skript storage*/
    protected $script = [];
    
    /**
     * Building script string;
     *
     * @return string script string
     */
    protected function buildScript()
    {
        $string = '';
        foreach ($this->script as $script) {
            $string .= '<script src="' . $script . '"></script>';
        }
        return $string;
    }
    
    /**
     * Return html body string
     *
     * @return string
     */
    public function getHtml() 
    {
        $string = '<body>';
        $string .= parent::getHtml();
        $string .= $this->buildScript();
        $string .= '</body>';
        return $string;
    }

    /**
     * Adding skript to body
     *
     * @param string $name name of skript
     *
     * @return null
     */
    public function addScript(string $name)
    {
        $this->script[] = $name;
    }
}
?>
