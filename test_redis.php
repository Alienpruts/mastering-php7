<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 1/12/18
 * Time: 20:16
 */

try {
    $client = new Redis();
    $client->connect('localhost', 6379);

    //echo $client->get('Key3') . PHP_EOL;
    //echo $client->get('Key5') . PHP_EOL;

    //$values = $client->mget(['Key1', 'Key2', 'Key4']);
    //var_dump($values);

    // Wrong way, this will insert "Array" instead of the values
   /* $client->set('user', [
        'name' => 'John',
        'age' => 34,
        'salary' => 4200.00,
    ]);

    echo $client->get('user');
    */

   //Correct way
    $client->set('customer', json_encode([
        'name' => 'Marc',
        'age' => 43,
        'salary' => 3600.00
    ]));

    echo $client->get('customer');
} catch (RedisException $e){
    echo $e->getMessage() . PHP_EOL;
}
