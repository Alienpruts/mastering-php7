<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 9:11
 */

namespace MasteringPHP7\Pattern;


class Image
{

    private $width;
    private $height;

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     * @return Image
     */
    public function setWidth($width): Image
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     * @return Image
     */
    public function setHeight($height): Image
    {
        $this->height = $height;
        return $this;
    }


}