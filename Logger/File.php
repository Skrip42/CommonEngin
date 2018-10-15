<?php
/**
 * Abstract logger class to writing log to file
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
 * */
abstract class File extends \Engin\Logger\Common
{
    /* driver for logging*/
    protected $driver;
    /* driver name for initialization*/
    protected $driverName = '\Engin\Driver\File';
    /* filename for loging*/
    protected $filename = 'log';

    /**
     * Construct. initing propertyes;
     *
     * @return null
     */ 
    protected function __construct()
    {
        $date = new \DateTime('NOW');
        $dateString = $date->format('Y-m-d');
        $this->driver = \Engin\Driver\File::getInstance(
            'log/' . $dateString . '_' . $this->filename . '.log'
        );
        parent::__construct();
    }
    
    /**
     * Sending message to file
     *
     * @param string $message message to writing
     *
     * @return null
     */
    public function send(string $message)
    {
        $this->driver->append($message);
    }
}

?>
