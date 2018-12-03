<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 2/12/18
 * Time: 14:22
 */

namespace MasteringPHP7\PHPUnitDemo;

use PHPUnit\Framework\TestCase;

class CategoryViewTest extends TestCase
{
    /** @var Category $category */
    private $category;

    /** @var CategoryView $categoryView */
    private $categoryView;

    protected function setUp()
    {
        $this->category = new Category('Laptops', [
            new Product('TRL', 'Test Red Laptop', 1499.99, 25),
            new Product('TYL', 'Test Yellow Laptop', 2499.99, 25),
        ]);
        $this->categoryView = new CategoryView($this->category);
    }

    public function testIfCategoryTitleIsFormattedCorrectly()
    {
        $needle = '<h1 class="category-title">Laptops';
        $this->assertContains($needle, $this->categoryView->render());
    }

    public function testIfProductsAreFormattedCorrectly()
    {
        $needle = '<h1 class="product-title">Test Yellow';
        $this->assertContains($needle, $this->categoryView->render());
    }
}
