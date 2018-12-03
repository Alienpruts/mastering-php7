<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 9:25
 */

namespace MasteringPHP7\Pattern;


class ObjectPool
{
    private $instances = [];

    public function load(string $key)
    {
        return $this->instances[$key];
    }

    public function save($object, string $key)
    {
        $this->instances[$key] = $object;
    }

}