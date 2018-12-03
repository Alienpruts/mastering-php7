<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 27/11/18
 * Time: 11:04
 */

//stream_set_blocking(STDIN, 0);
//stream_set_blocking(STDIN, 1);

echo 'Start' . PHP_EOL;

// old testing code
//while (($line = fgets(STDIN)) !== false){
//    echo $line;
//}


$process = proc_open('php beacon.php 2', [
    ['pipe', 'r'], //STDIN
    ['pipe', 'w'], //STDOUT
    ['file', './signals.log', 'a'] //STDERR
], $pipes);
stream_set_blocking($pipes[1], 1); // BLOCKING IO
stream_set_blocking($pipes[1], 0); // NON BLOCKING IO

while (proc_get_status($process)['running']) {
    usleep(100000);
    if ($signal = fgets($pipes[1])) {
        echo $signal;
    } else {
        echo '---beacon lost---' . PHP_EOL;
    }
}

fclose($pipes[1]);
proc_close($process);
echo 'End' . PHP_EOL;