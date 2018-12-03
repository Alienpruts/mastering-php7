<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 9:05
 */

namespace MasteringPHP7\Pattern;


class RegisterButton implements Button
{

    public function render()
    {
        return '<button name="register">Register</button>';
    }
}