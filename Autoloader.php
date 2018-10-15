<?php
/**
 * Basic autoloader
 *
 * PHP version 7
 * 
 * @category Function
 * @package  CommonEngin
 * @author   Skrip <skrip42@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html CNU General Public License
 * @link     http://github.com/Skrip42
 */

namespace Engin;

require_once 'Engin/Autoload.php';

/**
 * Autoload function
 *
 * @param string $class required class name
 *
 * @throw \Engin\Exception\Load
 *
 * @return null
 */
function autoloader(string $class)
{
    $filename = str_replace('\\', '/', $class);
    if (!file_exists($filename)) {
        throw new \Engin\Exception\Unexepted($class);
    }
    include_once $filename ;
}
spl_autoload_register('Engin\autoloader');
?>
