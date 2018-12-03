<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 9:44
 */

use MasteringPHP7\PatternClient\Checkout;

require_once __DIR__ . '/vendor/autoload.php';

$checkout = new Checkout(19.99);
echo $checkout->estimateShipment();

$checkout = new Checkout(499.99);
echo $checkout->estimateShipment();