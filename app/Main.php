<?php
/**
 * User: ben
 * Date: 19/7/8
 * Time: 14:00
 */

namespace App;

/**
 * Class main
 *
 * @package App
 */
class Main extends Basic
{

    /**
     * @return |null
     */
    public function run()
    {
        echo $_ENV['APP_NAME'] . PHP_EOL;
        $this->log->info('Hello', ['world']);
        $this->log->debug('config', (array)$this->config->all());
        return null;
    }
}
