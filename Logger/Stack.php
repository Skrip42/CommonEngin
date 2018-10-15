<?php
/**
 * Common logger class. witch stack
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
abstract class Stack extends \Engin\Logger\Common
{
    /* stack for log optimization*/
    protected $logStak;

    /* automatic flush after $autoFlush message*/
    protected $autoflush = 50;

    /**
     * Construct. initing propertyes;
     *
     * @return null
     */ 
    protected function __construct()
    {
        $this->logStak = new SplStack;
        parent::__construct();
    }

    /**
     * Set message
     *
     * @param string $message Message to log
     *
     * @return null
     */
    public function send(string $message)
    {
        $this->logStak->push($message);
        if ($this->logStak->count() >= $this->autoflush) {
            $this->flush();
        }
    }

    /**
     * Set message and flush log
     *
     * @param string $message Message to log
     *
     * @return null;
     */
    public function fSend($message)
    {
        $this->setMessage($message);
        $this->flush();
    }

    /**
     * Flush stack
     *
     * @return null;
     */
    abstract public function flush();

    /**
     * Destructor. FLushing log
     *
     * @return null
     */
    public function __destruct()
    {
        $this->flush();
    }
}

?>
