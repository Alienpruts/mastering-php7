<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 9:13
 */

namespace MasteringPHP7\Pattern;


class ImageBuilder implements ImageBuilderInterface
{
    private $image;

    /**
     * ImageBuilder constructor.
     * @param $image
     */
    public function __construct()
    {
        $this->image = new Image();
    }


    public function setWidth($width): ImageBuilder
    {
        $this->image->setWidth($width);
        return $this;
    }

    public function setHeight($height): ImageBuilder
    {
        $this->image->setHeight($height);
        return $this;
    }

    public function getResult(): Image
    {
        return $this->image;
    }
}