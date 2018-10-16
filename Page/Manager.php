<?php
/**
 * Page Manager
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
 * Page manager for get Page class by url or className
 */
class Manager extends \Engin\Common\Singleton
{
    /**
     * Returned page by url
     *
     * @param string $url url
     *
     * @return \Engin\Page\Common
     */
    public function byUrl($url)
    {
        return $this->byClass(
            \Engin\Router::getInstance()->getPageNameFromUrl($url)
        );
    }

    /**
     * Returned page by class name
     *
     * @param string $name class name
     *
     * @return \Engin\Page\Common
     */
    public function byClass($name)
    {
        $className = $name;
        return  $className::getInstance();
    }
}
?>
