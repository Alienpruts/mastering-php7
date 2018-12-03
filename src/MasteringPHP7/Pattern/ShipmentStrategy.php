<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 9:40
 */

namespace MasteringPHP7\Pattern;


interface ShipmentStrategy
{
    public function calculate($amount);
}