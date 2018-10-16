<?php
/**
 * Header block
 *
 * PHP version 7
 * 
 * @category Class
 * @package  CommonEngin
 * @author   Skrip <skrip42@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html CNU General Public License
 * @link     http://github.com/Skrip42
 */
namespace Engin\Block;

/**
 * Base html header block
 */
class Header extends \Engin\Block\Common
{
    protected $styles = [
    ];
    protected $meta = [
        'charset="UTF-8"',
        'name="viewport" content="width=divice-width, initial-scale=1.0"'
    ];
    protected $title = '';

    /**
     * Adding style to header
     *
     * @param string $stylename name of style
     *
     * @return null
     */
    public function addStyle(string $stylename)
    {
        $this->styles[] = $stylename;
    }

    /**
     * Adding meta to header
     *
     * @param string $meta meta string
     *
     * @return null
     */
    public function addMeta(string $meta) 
    {
        $this->meta[] = $meta;
    }
    
    /**
     * Setting title
     *
     * @param string $title title of page
     *
     * @return null
     */
    public function setTitle(string $title) 
    {
        $this->title = $title;
    }

    /**
     * Build meta parts
     *
     * @return string;
     */
    protected function buildMeta()
    {
        $string = '';
        foreach ($this->meta as $meta) {
            $string .= '<meta ' . $meta . '>';
        }
        return $string;
    }

    /**
     * Build style parts
     *
     * @return string;
     */
    protected function buildStyle()
    {
        $string = '';
        foreach ($this->styles as $style) {
            $string .= '<link rel="stylesheet" href="' . $style. '">';
        }
        return $string;
    }

    /**
     * Build header
     *
     * @return string;
     */
    public function getHtml()
    {
        $string = '<head>';
        $string .= '<title>' . $this->title . '</title>';
        $string .= $this->buildMeta();
        $string .= $this->buildStyle();
        $string .= '</heade>';
        return $string;
    }
}
?>
