<?php
/**
 * Driver for ini file
 *
 * PHP version 7
 * 
 * @category Class
 * @package  CommonEngin
 * @author   Skrip <skrip42@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html CNU General Public License
 * @link     http://github.com/Skrip42
 */
namespace Engin\Driver\File;

/**
 * Driver for ini file
 */
class Ini extends \Engin\Driver\File
{
    /**
     * Returned flat array from ini file
     *
     * @return array
     */
    public function getFlatArray()
    {
        return parse_ini_file($this->filename, false, \INI_SCANNER_RAW);
    }
    
    /**
     * Returned section array from ini file
     *
     * @return array[]
     */
    public function getSectionArray()
    {
        return parse_ini_file($this->filename, true, \INI_SCANNER_RAW);
    }
}
?>
