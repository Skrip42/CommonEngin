<?php
/**
 * PDO interface
 *
 * PHP version 7
 * 
 * @category Class
 * @package  CommonEngin
 * @author   Skrip <skrip42@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html CNU General Public License
 * @link     http://github.com/Skrip42
 */
namespace Engin;

/**
 * Dto interface;
 */
class PDO extends \Engin\Common\Factory
{
    protected $pdo;

    /**
     * Construct. initing dto from Config/Mysql/$database.ini
     *
     * @param string $database database name
     */
    protected function __construct($database)
    {
        $configDriver = \Engin\Driver\File\Ini::getInstance(
            'Config/Mysql/' . $database . '.ini'
        );
        $config = $configDriver->getFlatArray();
        $this->pdo = new \PDO(
            "mysql:host={$config['host']};dbname={$config['dbName']}", 
            $config['user'], 
            $config['password']
        );
    }

    /**
     * Returned dto instance
     *
     * @return PDO
     */
    public function getPDO()
    {
        return $this->pdo;
    }
}
?>
