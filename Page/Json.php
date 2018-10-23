<?php
/**
 * Base json Page
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
 * Base json string
 */
abstract class Json extends \Engin\Page\Common
{
    /* processing data*/
    protected $data;

    /**
     * Return json string
     *
     * @return string
     */
    public function render()
    {
        $this->build();
        return json_encode($this->data);
    }

    /**
     * Main function
     *
     * @return null
     */
    abstract protected function build();
}
