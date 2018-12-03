<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 9:08
 */

use MasteringPHP7\Pattern\LoginFactory;
use MasteringPHP7\Pattern\RegisterFactory;

require_once __DIR__ . '/vendor/autoload.php';

$loginButtonFactory = new LoginFactory();
$button = $loginButtonFactory->createButton();
echo $button->render();

$registerBuuttonFactory = new RegisterFactory();
$button = $registerBuuttonFactory->createButton();
echo $button->render();