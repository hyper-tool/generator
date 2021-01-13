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
        try {
            echo $_ENV['APP_NAME'] . PHP_EOL;
            $this->log->info('Hello', ['world']);
            $this->log->debug('config', (array)$this->config->all());
            $response_return = null;
        } catch (\Exception $exception) {
            $response_return = $exception->getMessage();
        }
        return $response_return;
    }
}
