<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 2/12/18
 * Time: 14:18
 */

namespace MasteringPHP7\PHPUnitDemo;

use PHPUnit\Framework\TestCase;

class CategoryTest extends TestCase
{
    /** @var Category $category */
    private $category;

    protected function setUp()
    {
        $this->category = new Category('Laptops', [
            new Product('TRL', 'Test Red Laptop', 1499.99, 25),
            new Product('TYL', 'Test Yellow Laptop', 2499.99, 25),
        ]);
    }

    public function testTotalProductsCount()
    {
        $this->assertCount(2, $this->category->getProducts());
    }

    public function testIfTitleIsReturned()
    {
        $this->assertEquals('Laptops', $this->category->getTitle());
    }

}
