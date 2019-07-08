<?php
/**
 * User: ben
 * Date: 19/7/8
 * Time: 14:00
 */

namespace App;

use stdClass;
use Noodlehaus\Config;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class main
{
    protected $config = [];
    /**
     * @var Logger|string
     */
    protected $log = stdClass::class;

    public function __construct()
    {
        $this->config = Config::load(__DIR__ . '/../config/app.php');
    }

    public function run()
    {
        $this->config = Config::load(__DIR__ . '/../config/app.php');
        $log= new Logger('name');
        $log->pushHandler(new StreamHandler(__DIR__ . '/../logs/app.log', Logger::DEBUG));
        $log->warning('Foo');
        $log->error('Bar');
        return null;
    }
}