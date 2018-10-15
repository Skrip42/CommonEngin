<?php
/**
 * Front file
 * call autoloader end Exception processing 
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
try {
    echo "welcom to CommonEngin!";

    include_once 'Engin/Autoloader.php';

    $class = new unnessesaryClass();
    //$driver = \Engin\Driver\File::getInstance('adds', 1, true, 'common');
} catch (\ErrorException $e) {
    \Engin\Error\Logger\Manager::getInstance()->log($e);
    //\Engin\Logger\Out::getInstance()->send($e->getMessage());
}
?>
