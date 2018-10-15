<?php
/**
 * Logger class to writing error log
 *
 * PHP version 7
 * 
 * @category Class
 * @package  CommonEngin
 * @author   Skrip <skrip42@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html CNU General Public License
 * @link     http://github.com/Skrip42
 */
namespace Engin\Logger;

/**
 * Logger to file
 */
class Error extends \Engin\Logger\File
{
    protected $filename = 'Error';
}
