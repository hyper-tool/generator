<?php
/**
 * User: ben
 * Date: 19/7/8
 * Time: 14:00
 */

namespace App;

use Noodlehaus\Config;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

/**
 * Class main
 *
 * @package App
 */
class main
{
    /**
     * @var Config
     */
    protected $config;
    /**
     * @var Logger|string
     */
    protected $log;

    /**
     * main constructor.
     *
     * @throws \Exception
     */
    public function __construct()
    {
        $this->config = Config::load(__DIR__ . '/../config/app.php');
        $this->config = Config::load(__DIR__ . '/../config/app.php');
        $this->log = new Logger('name');
        $this->log->pushHandler(new StreamHandler(__DIR__ . '/../logs/app.log', Logger::DEBUG));
    }

    /**
     * @return null
     */
    public function run()
    {
        $this->log->info('Hello');
        $this->log->info(json_encode($this->config));
        return null;
    }
}