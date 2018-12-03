<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 9:16
 */

namespace MasteringPHP7\Pattern;


class ImageBuildDirector
{
    private $builder;

    /**
     * ImageBuildDirector constructor.
     * @param ImageBuilder $builder
     */
    public function __construct(ImageBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function build(): ImageBuildDirector
    {
        $this->builder->setWidth(120);
        $this->builder->setHeight(80);
        return $this;
    }

    public function getImage(): Image
    {
        return $this->builder->getResult();
    }
}