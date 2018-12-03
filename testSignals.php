#!/usr/bin/env php
<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 23/11/18
 * Time: 23:19
 */

declare(ticks = 1);

echo 'Started' . PHP_EOL;

function signalHandler($signal){
    echo 'Triggered SignalHandler : ' . $signal . PHP_EOL;
    // exit();
}

pcntl_signal(SIGINT, 'signalHandler');

$loop = 0;
while (true) {
    echo 'loop ' . (++$loop) . PHP_EOL;
    flush();
    sleep(2);
}

echo 'Finished' . PHP_EOL;
