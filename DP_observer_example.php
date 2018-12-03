<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 10:09
 */

use MasteringPHP7\Pattern\CheckoutSuccess;
use MasteringPHP7\Pattern\Logger;
use MasteringPHP7\Pattern\Mailer;
use MasteringPHP7\PatternClient\SalesOrder;

require_once __DIR__ . '/vendor/autoload.php';

$salesOrder = new SalesOrder();
$checkooutSuccess = new CheckoutSuccess($salesOrder);

$checkooutSuccess->attach(new Mailer());
$checkooutSuccess->attach(new Logger());

$checkooutSuccess->notify();