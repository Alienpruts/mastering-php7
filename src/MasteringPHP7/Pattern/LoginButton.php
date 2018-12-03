<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 9:04
 */

namespace MasteringPHP7\Pattern;


class LoginButton implements Button
{

    public function render()
    {
        return '<button name="login">Login</button>';
    }
}