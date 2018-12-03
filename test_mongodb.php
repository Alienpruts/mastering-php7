<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 1/12/18
 * Time: 8:19
 */

use MongoDB\Driver\BulkWrite;
use MongoDB\Driver\Manager;
use MongoDB\Driver\Query;
use MongoDB\Driver\WriteConcern;

require_once __DIR__ . '/vendor/autoload.php';

try {
    $manager = new Manager('mongodb://localhost:27017');

    $bulkWrite = new BulkWrite();

    $rand = mt_rand(0, 9000000);

    $bulkWrite->update(
        ['name' => 1],
        ['$set' => [
            'name' => 'Test insert # ' . ($rand + 1),
        ]],
        ['multi' => true, 'upsert' => false]
        );

    $bulkWrite->delete(
        ['name' => [
            '$regex' => '1861122'
            ],
        ],
        ['limit' => false]
    );

    $bulkWrite->insert([
        'name' => 'Test insert # ' . $rand,
        'price' => $rand,
        'weight' => $rand . 'g',
    ]);

    $bulkWrite->insert([
        'name' => 'Test insert # ' . ($rand + 1),
        'price' => ($rand + 1),
        'weight' => ($rand + 1) . 'g',
    ]);

    $writeConcern = new WriteConcern(WriteConcern::MAJORITY, 1000);

    $result = $manager->executeBulkWrite('foggyline.products', $bulkWrite, $writeConcern);

    if ($result->getInsertedCount()) {
        echo 'Record(s) saved successfully.' . PHP_EOL;
    } else {
        echo 'Error occurred during saving of records.' . PHP_EOL;
    }

    $filter = [
        'price' => [
            '$gte' => 619.99,
        ],
    ];

    $queryOptions = [
        'projection' => [
            'name' => 1,
            'price' => 1,
        ],
        'sort' => [
            'price' => 1,
        ],
    ];

    $query = new Query($filter, $queryOptions);

    $products = $manager->executeQuery('foggyline.products', $query);

    foreach ($products as $product) {
        echo $product->name . " : " . $product->price . PHP_EOL;
    }
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    exit();
}
