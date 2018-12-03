<?php

namespace spec\MasteringPHP7\BehatDemo;

use MasteringPHP7\BehatDemo\Cart;
use MasteringPHP7\PHPUnitDemo\Product;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CartSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Cart::class);
    }

    public function it_adds_single_product_to_cart()
    {
        $this->addProduct(
            new Product('YL', 'Yellow Laptop', 1499.99, 25), 1
        );

        $this->count()->shouldBeLike(1);
    }

    public function it_adds_two_products_to_cart()
    {
        $this->addProduct(
            new Product('YL', 'Yellow Laptop', 1499.99, 25), 2
        );

        $this->addProduct(
            new Product('RL', 'Red Laptop', 2499.99, 25), 2
        );

        $this->count()->shouldBeLike(2);
    }
}
