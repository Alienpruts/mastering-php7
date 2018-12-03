<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 9:07
 */

namespace MasteringPHP7\Pattern;


class RegisterFactory implements FormFactory
{

    public function createButton()
    {
        return new RegisterButton();
    }
}