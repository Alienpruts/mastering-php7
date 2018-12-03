<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 0:59
 */

namespace MasteringPHP7\PatternClient;


class User
{
    public $name;

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }



    public function hello()
    {
        return 'Hello ' .  $this->name;
    }
}