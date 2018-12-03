<?php

namespace spec\MasteringPHP7\PHPUnitDemo;

use MasteringPHP7\PHPUnitDemo\Product;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProductSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Product::class);
    }

    public function let()
    {
        $this->beConstructedWith(
            'YL', 'Yellow Laptop', 1499.99, 25
        );
    }

    public function its_price_should_be_like()
    {
        $this->getPrice()->shouldBeLike(1499.99);
    }

    public function its_title_should_be_like()
    {
        $this->getTitle()->shouldBeLike('Yellow');
    }
}
