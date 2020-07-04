<?php
/**
 * User: ben
 * Date: 19/7/8
 * Time: 14:00
 */

namespace App;

use Dotenv\Dotenv;
use Noodlehaus\Config;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

/**
 * Class main
 *
 * @package App
 */
class Basic
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
     * Basic constructor.
     * @throws \Exception
     */
    protected function __construct()
    {
        (Dotenv::createImmutable(__DIR__ . '/../'))->load();
        $this->config = Config::load(__DIR__ . '/../config/app.php');
        $this->log = new Logger('app');
        $this->log->pushHandler(new StreamHandler(__DIR__ . '/../logs/app.log', Logger::DEBUG));
    }

}
