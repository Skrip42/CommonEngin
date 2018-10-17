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

    protected $filename;
    protected $mode;

    /**
     * Returned file description
     *
     * @return mixed
     */
    protected function getFileDescription()
    {
        if (empty($this->file)) {
            $this->file = fopen($this->filename, $this->mode);
        }
        return $this->file;
    }

    /**
     * Constructor
     *
     * @param string $filename name of file
     * @param string $mode     mode to file descriptor
     */
    protected function __construct(string $filename, string $mode = 'a+t')
    {
        //$this->file = fopen($filename, $mode);
        $this->filename = $filename;
        $this->mode = $mode;
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
        flock($this->getFileDescription(), \LOCK_EX);
        $count = fputs($this->file, $text);
        flock($this->getFileDescription(), \LOCK_UN);
        return $count;
    }

    /**
     * Flush changes
     *
     * @return bool
     */
    public function flush()
    {
        return fflush($this->getFileDescription());
    }

    /**
     * Desctuctor. Flush and free descriptor;
     */
    public function __destruct()
    {
        if (empty($this->file)) {
            return;
        }
        $this->flush();
        fclose($this->file);
    }
}
?>
