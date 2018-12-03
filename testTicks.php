<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 22/11/18
 * Time: 17:10
 */
declare(ticks = 2);
echo 'Start' . PHP_EOL;

function tickLogger() {
    echo 'Tick was logged!' . PHP_EOL;
}

register_tick_function('tickLogger');

//declare( ticks=2)  {
    for ($i = 1; $i <= 10; $i++){
        echo '$i => ' . $i . PHP_EOL;
    }
//}

echo 'Stopped' . PHP_EOL;