<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 2/12/18
 * Time: 23:06
 */

use MasteringPHP7\BehatDemo\Cart;
use MasteringPHP7\PHPUnitDemo\Product;

require_once __DIR__ . '/../vendor/autoload.php';

$cart = new Cart();
$cart->addProduct(new Product('RL', 'Red Laptop', 75.00, 25), 1);
$cart->addProduct(new Product('YL', 'Yellow Laptop', 100.00, 25), 1);

echo $cart->getSubtotal() . PHP_EOL;
echo $cart->getTotal() . PHP_EOL;

$cart->removeProduct('YL');

echo $cart->getSubtotal() . PHP_EOL;
echo $cart->getTotal() . PHP_EOL;