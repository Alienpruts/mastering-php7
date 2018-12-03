<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 1:00
 */

use MasteringPHP7\Pattern\Registry;
use MasteringPHP7\PatternClient\User;

require_once __DIR__ . '/vendor/autoload.php';

$user1 = new User();
$user2 = new User();

$user1->name = 'John';
$user2->name = 'Marc';

$registry = new Registry();
$registry->set('employee', $user1);
$registry->set('director', $user2);

echo $registry->get('director')->name;