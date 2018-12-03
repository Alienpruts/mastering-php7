#!/usr/bin/env php
<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 23/11/18
 * Time: 23:29
 */
declare(ticks=1);

echo 'Started' . PHP_EOL;

function signalHandler($signal){
    echo 'Triggered signalHandler : ' . $signal . PHP_EOL;
}

pcntl_signal(SIGALRM, 'signalHandler');
pcntl_alarm(7);

while (true){
    echo 'loop ' . date('h:i:sa') . PHP_EOL;
    flush();
    sleep(2);
}

echo 'Finished' . PHP_EOL;