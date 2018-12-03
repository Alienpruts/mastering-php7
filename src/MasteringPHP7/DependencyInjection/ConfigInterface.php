<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 1/12/18
 * Time: 21:42
 */

namespace MasteringPHP7\DependencyInjection;


interface ConfigInterface
{
    public function getValue();
    public function setValue($path, $value);
}