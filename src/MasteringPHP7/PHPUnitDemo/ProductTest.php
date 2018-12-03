<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 2/12/18
 * Time: 14:13
 */

namespace MasteringPHP7\PHPUnitDemo;


use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    /** @var Product $product */
    private $product;

    /**
     *
     */
    protected function setUp()
    {
        $this->product = new Product('SL', 'Silver Laptop', 4599.99, 25);
    }

    public function testIfTitleIsReturned()
    {
        $this->assertEquals(
            'Silver Laptop',
            $this->product->getTitle()
        );
    }

    public function testIfPriceIsReturned()
    {
        $this->assertEquals(
            4599.99,
            $this->product->getPrice()
        );
    }

}
