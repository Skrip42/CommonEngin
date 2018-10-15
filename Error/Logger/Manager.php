<?php
/**
 * Logger manager for system error
 *
 * PHP version 7
 * 
 * @category Class
 * @package  CommonEngin
 * @author   Skrip <skrip42@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html CNU General Public License
 * @link     http://github.com/Skrip42
 */    
namespace Engin\Error\Logger;

/**
 * Class for error logging
 */
final class Manager extends \Engin\Common\Singleton
{
    /* loggers storage*/
    private $_loggers = [];

    /**
     * Constructor
     */
    protected function __construct()
    {
        $this->_loggers['Notice'] = \Engin\Logger\Notice::getInstance();
        $this->_loggers['Warning'] = \Engin\Logger\Warning::getInstance();
        $this->_loggers['Error'] = \Engin\Logger\Error::getInstance();
        parent::__construct();
    }

    /**
     * Logging error
     *
     * @param \ErrorException $error exception
     *
     * @return null;
     */
    public function log(\ErrorException $error)
    {
        $severity = $error->getSeverity();
        if ($severity & \E_ERROR 
            || $severity & \E_USER_ERROR 
            || $severity & \E_CORE_ERROR
        ) {
            $this->_loggers['Error']->send($this->_formLogString($error));
        } else if ($severity & \E_WARNING
            || $severity & \E_USER_WARNING
            || $severity & \E_CORE_WARNING
        ) {
            $this->_loggers['Warning']->send($this->_formLogString($error));
        } else {
            $this->_loggers['Notice']->send($this->_formLogString($error));
        }
    }

    /**
     * Forming string to logging
     *
     * @param \ErrorException $error exception
     *
     * @return string
     */
    private function _formLogString(\ErrorException $error)
    {
        $date = new \DateTime('NOW');
        $timestamp = $date->format('H:i:s');
        if (isset($_SERVER['HTTP_REFERER'])) {
            $referer = 'Referer: ' . $_SERVER['HTTP_REFERER'] . "\n";
        } else {
            $referer = '';
        }
        $host = $_SERVER['HTTP_HOST'];
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        $userIp = $_SERVER['REMOTE_ADDR'];
        $memory = memory_get_usage() . '/' . memory_get_usage(true);
        return $timestamp . ' from host: ' . $host . "\n"
            . $referer  
            . 'Message: ' . $error->getMessage() . ' in file :' . $error->getFile() 
            . ' (line:' .$error->getLine() . ")\n"
            . "Trace: \n" . $error->getTraceAsString() . "\n"
            . 'UserAgent: ' . $userAgent 
            . ' ip: ' . $userIp . "\n\n\n";
    }

}
?>
