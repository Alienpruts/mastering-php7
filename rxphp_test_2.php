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

// Generator, reads CSV file.
function users($file) {
    $users = fopen($file, 'rb');
    while (!feof($users)){
        yield fgetcsv($users)[0];
    }
    fclose($users);
}

$logger = new CallbackObserver(
    function ($user) {
        echo $user . PHP_EOL;
    },
    function (\Throwable $t){
        echo $t->getMessage() . PHP_EOL;
    },
    function () {
        echo 'Stream complete!' . PHP_EOL;
    }
);

// Dummy map callback function
$mapper = function ($value) {
    return time() . ' | ' . $value;
};

// Dummy filter callback function
$filter = function ($value) {
    return strstr($value, 'Ma');
};

// Start generator
$users = users(__DIR__ . '/users.csv');

// The Observable from RxPHP
Observable::fromIterator($users)
    ->map($mapper)
    ->filter($filter)
    ->subscribe($logger);

$loop->run();