<?php
/**
 * Driver for file
 *
 * PHP version 7
 * 
 * @category Class
 * @package  CommonEngin
 * @author   Skrip <skrip42@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html CNU General Public License
 * @link     http://github.com/Skrip42
 */
namespace Engin\Driver;

/**
 * Driver for file
 */
class File extends \Engin\Driver\Common
{
    /* file descriptor*/
    protected $file;

    /**
     * Constructor
     *
     * @param string $filename name of file
     * @param string $mode     mode to file descriptor
     */
    protected function __construct(string $filename, string $mode = 'a+t')
    {
        $this->file = fopen($filename, $mode);
    }

    /**
     * Append data to file
     *
     * @param string $text text to writing
     *
     * @return int|bool;
     */
    public function append($text)
    {
        flock($this->file, \LOCK_EX);
        $count = fputs($this->file, $text);
        flock($this->file, \LOCK_UN);
        return $count;
    }

    /**
     * Flush changes
     *
     * @return bool
     */
    public function flush()
    {
        return fflush($this->file);
    }

    /**
     * Desctuctor. Flush and free descriptor;
     */
    public function __destruct()
    {
        $this->flush();
        fclose($this->file);
    }
}
?>
