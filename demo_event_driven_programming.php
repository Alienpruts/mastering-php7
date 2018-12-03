<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 25/11/18
 * Time: 10:23
 */

use MasteringPHP7\Event\UserRegister;
use MasteringPHP7\Observer\Logger;
use MasteringPHP7\Observer\Mailer;

require_once __DIR__ . '/vendor/autoload.php';

$userRegister = new UserRegister('Bert');

$userRegister->attach(new Mailer());
$userRegister->attach(new Mailer());

$userRegister->attach(new Logger());
$userRegister->attach(new Logger());

$userRegister->notify();