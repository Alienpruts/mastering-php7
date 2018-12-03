<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 1/12/18
 * Time: 21:43
 */

namespace MasteringPHP7\DependencyInjection;


interface LoggerInterface
{
    public function log($message);
}