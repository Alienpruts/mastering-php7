<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 9:06
 */

namespace MasteringPHP7\Pattern;


class LoginFactory implements FormFactory
{

    public function createButton()
    {
        return new LoginButton();
    }
}