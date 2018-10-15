<?php
/**
 * Default load file;
 *
 * Loading file need to Autoloader
 *
 * PHP version 7
 * 
 * @category Base
 * @package  CommonEngin
 * @author   Skrip <skrip42@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html CNU General Public License
 * @link     http://github.com/Skrip42
 */    
namespace Engin;

require_once 'Engin/Exception/Error.php';
require_once 'Engin/Exception/Unexepted.php';
require_once 'Engin/Common/Singleton.php';
require_once 'Engin/Common/Factory.php';
require_once 'Engin/Logger/Common.php';
require_once 'Engin/Logger/File.php';
require_once 'Engin/Logger/Notice.php';
require_once 'Engin/Logger/Warning.php';
require_once 'Engin/Logger/Error.php';
require_once 'Engin/Error/Logger/Manager.php';
require_once 'Engin/Driver/Common.php';
require_once 'Engin/Driver/File.php';
?>
