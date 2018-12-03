#!/usr/bin/env php
<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 22/11/18
 * Time: 12:23
 */

use MasteringPHP7\Console\Command\CustomerExportCommand;
use MasteringPHP7\Console\Command\CustomerRegisterCommand;
use MasteringPHP7\Console\Command\CustomerStatusSetCommand;
use Symfony\Component\Console\Application;

$loader = require __DIR__ . '/vendor/autoload.php';
$loader->add('MasteringPHP7', __DIR__ . '/src/' );

$app = new Application('Test App', '1.0.0');

$app->add(new CustomerRegisterCommand());
$app->add(new CustomerStatusSetCommand());
$app->add(new CustomerExportCommand());

$app->run();