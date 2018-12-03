<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 2/12/18
 * Time: 11:32
 */
declare(strict_types=1);
namespace MasteringPHP7\PHPUnitDemo;


class Category
{

    protected $title;
    protected $products;

    /**
     * Category constructor.
     * @param $title
     * @param $products
     */
    public function __construct(string $title, array $products)
    {
        $this->title = $title;
        $this->products = $products;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }



}