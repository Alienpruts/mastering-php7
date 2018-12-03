<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 1:14
 */

use MasteringPHP7\Pattern\SystemLogger;

require_once __DIR__ . '/vendor/autoload.php';

$systemLogger = new SystemLogger();
echo $systemLogger->log('test') . PHP_EOL;

$logger = clone $systemLogger;
echo $logger->log('test2') . PHP_EOL;

$logger->channel = 'mail';
echo $logger->log('test3') . PHP_EOL;