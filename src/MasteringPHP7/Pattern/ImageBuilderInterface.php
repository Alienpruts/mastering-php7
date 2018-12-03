<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 9:13
 */

namespace MasteringPHP7\Pattern;


interface ImageBuilderInterface
{
    public function setWidth($width);
    public function setHeight($height);
    public function getResult();
}