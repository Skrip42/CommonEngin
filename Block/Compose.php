<?php
/**
 * Compose html block
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
 * Compose html block
 */
class Compose extends \Engin\Block\Common
{
    /* block storage*/
    protected $blocks = [];

    /**
     * Return html string
     *
     * @return string
     */
    public function getHtml()
    {
        $string = '';
        foreach ($this->blocks as $block) {
            $string .= $block->getHtml();
        }
        return $string;
    }

    /**
     * Add block to end of block list
     * 
     * @param \Engin\Block\Common ...$blocks appended block
     *
     * @return null
     */
    public function append(\Engin\Block\Common ...$blocks)
    {
        foreach ($blocks as $block) {
            $this->blocks[] = $block;
        }
    }
}
?>
