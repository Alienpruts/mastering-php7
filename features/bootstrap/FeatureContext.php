<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use MasteringPHP7\BehatDemo\Cart;
use MasteringPHP7\PHPUnitDemo\Product;
use PHPUnit\Framework\Assert;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private $cart;
    private $products = [];

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->cart = new Cart();
    }

    /**
     * @Given there is a :arg1, which costs $:arg2 and has a tax rate of :arg3
     */
    public function thereIsAWhichCostsAndHasATaxRateOf($arg1, $arg2, $arg3)
    {
        $this->products[$arg1] = new Product($arg1, $arg1, $arg2, $arg3);
    }

    /**
     * @When I add the :arg1 to the cart
     */
    public function iAddTheToTheCart($arg1)
    {
       $this->cart->addProduct($this->products[$arg1], 1);
    }

    /**
     * @Then I should have :arg1 product in the cart
     */
    public function iShouldHaveProductInTheCart($arg1)
    {
        Assert::assertCount(($arg1), $this->cart);
    }

    /**
     * @Then the overall subtotal cart price should be $:arg1
     */
    public function theOverallSubtotalCartPriceShouldBe($arg1)
    {
        Assert::assertEquals($arg1, $this->cart->getSubtotal());
    }

    /**
     * @Then the overall total cart price should be $:arg1
     */
    public function theOverallTotalCartPriceShouldBe($arg1)
    {
        Assert::assertEquals($arg1, $this->cart->getTotal());
    }
}
