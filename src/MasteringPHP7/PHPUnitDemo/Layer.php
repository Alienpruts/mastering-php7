<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 2/12/18
 * Time: 11:33
 */

namespace MasteringPHP7\PHPUnitDemo;


class Layer
{
    public function dummy()
    {
        $time = time();
        sleep(2);
        $time = time() - $time;
        return $time;
    }
}