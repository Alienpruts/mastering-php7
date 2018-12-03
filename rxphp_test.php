<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 25/11/18
 * Time: 10:43
 */

use React\EventLoop\Factory;
use Rx\Observable;
use Rx\Observer\CallbackObserver;
use Rx\Scheduler;

require_once __DIR__ . '/vendor/autoload.php';

$loop = Factory::create();

try {
    Scheduler::setDefaultFactory(function () use ($loop) {
        return new Scheduler\EventLoopScheduler($loop);
    });
} catch (Exception $e) {
    echo $e->getMessage();
}

$users = Observable::fromArray(['John', 'Mariya', 'Marc', 'Lucy']);

$logger = new CallbackObserver(
    function ($user) {
        echo 'Logging ' . $user . PHP_EOL;
    },
    function (\Throwable $t) {
        echo $t->getMessage() . PHP_EOL;
    },
    function () {
        echo 'Stream complete!' . PHP_EOL;
    }
);

$users->subscribe($logger);

$loop->run();