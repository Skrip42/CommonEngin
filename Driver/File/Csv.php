<?php
/**
 * Driver for Csv file
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
 * Driver for csv file
 */
class Csv extends \Engin\Driver\File
{
    /**
     * Returned array from csv file
     *
     * @return array
     */
    public function getArray()
    {
        $array = [];
        while ($line = fgetcsv($this->getFileDescription())) {
            $array[] = $line;
        }
        return $array;
    }
    
    /**
     * Returned asoc array from csv file
     *
     * @return array
     */
    public function getAssocArray()
    {
        $handle = fgetcsv($this->getFileDescription());

        $array = [];
        while ($line = fgetcsv($this->getFileDescription())) {
            $aLine = [];
            for ($i = 0; $i < count($line); $i++) {
                $aLine[$handle[$i] ?? $i] = $line[$i]; 
            }
            $array[] = $aLine;
        }
        return $array;
    }
}
?>
