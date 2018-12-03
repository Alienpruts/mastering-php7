<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 27/11/18
 * Time: 11:03
 */

$now = time();

while ($now + $argv[1] > time()){
    echo 'Signal ' . microtime() . PHP_EOL;
    usleep(200000);
}
