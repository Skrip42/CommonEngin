<?php
/**
 * Router. Return page name from url
 *
 * PHP version 7
 * 
 * @category Class
 * @package  CommonEngin
 * @author   Skrip <skrip42@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html CNU General Public License
 * @link     http://github.com/Skrip42
 */
namespace Engin;

/** 
 * Router
 */
class Router extends \Engin\Common\Singleton
{
    private $_routs;
    private $_configFileName = 'Config/Routs.ini';
    private $_configFileDriverName = '\Engin\Driver\File\Ini';

    /**
     * Constructor.
     * Get routs list from config;
     */
    protected function __construct()
    {
        $this->_routs = $this
            ->_configFileDriverName::getInstance($this->_configFileName)
            ->getFlatArray();
        parent::__construct();
    }

    /**
     * Return page name from url
     *
     * @param string $url url
     *
     * @return string page name
     */
    public function getPageNameFromUrl($url)
    {
        $getStart = strpos($url, '?');
        if ($getStart) {
            $url = substr($url, 0, $getStart);
        }
        foreach ($this->_routs as $pattern => $pageName) {
            if (preg_match("~^$pattern$~", $url)) {
                return 'Page\\' . $pageName;
            }
        };
    }
}
?>
