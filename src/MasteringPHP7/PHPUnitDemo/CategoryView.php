<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 2/12/18
 * Time: 11:34
 */
declare(strict_types=1);

namespace MasteringPHP7\PHPUnitDemo;


class CategoryView
{
    protected $category;

    /**
     * CategoryView constructor.
     * @param $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function render() : string
    {
        $products = '';

        foreach ($this->category->getProducts() as $product){
            if ($product instanceof Product){
                $products .= '<div class="product">
                    <h1 class="product-title">' . $product->getTitle() . '</h1>
                    <div class="product-price">' . number_format($product->getPrice(), 2, ',', '.') . '</div>';
            }
        }
        return '<div class="category">
            <h1 class="category-title">' . $this->category->getTitle() . '</h1>
            <div class="category-products"> ' . $products . '</div> </div>';
    }
}