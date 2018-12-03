<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 9:32
 */

use MasteringPHP7\Pattern\ObjectPool;
use MasteringPHP7\PatternClient\User;

require_once __DIR__ . '/vendor/autoload.php';

$pool = new ObjectPool();

$user = new User();
$user->setName('Berten Boem');
$key = spl_object_hash($user);

$pool->save($user, $key);

unset($user);
var_dump(isset($user));


/** @var User $user */
$user = $pool->load($key);
echo $user->hello();