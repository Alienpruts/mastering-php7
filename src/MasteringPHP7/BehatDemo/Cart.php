<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 2/12/18
 * Time: 17:10
 */
declare(strict_types=1);

namespace MasteringPHP7\BehatDemo;


use MasteringPHP7\PHPUnitDemo\Product;

class Cart implements \Countable
{
    private $productQtyMapping = [];

    public function addProduct(Product $product, int $qty): self
    {
        $this->productQtyMapping[$product->getId()]['product'] = $product;
        $this->productQtyMapping[$product->getId()]['qty'] = $qty;
        return $this;
    }

    public function removeProduct($productId): self
    {
        if (isset($this->productQtyMapping[$productId])) {
            unset($this->productQtyMapping[$productId]);
        }

        return $this;
    }

    public function getSubtotal()
    {
        $subtotal = 0.0;

        foreach ($this->productQtyMapping as $mapping) {
            $subtotal += ($mapping['qty'] * $mapping['product']->getPrice());
        }

        return $subtotal;
    }

    public function getTotal()
    {
        $total = 0.0;

        foreach ($this->productQtyMapping as $mapping) {
            $total += ($mapping['qty'] * ($mapping['product']->getPrice() +
                    ($mapping['product']->getPrice() * ($mapping['product']->getTaxRate() / 100))));
        }
        return $total;
    }

    /**
     * Count elements of an object
     * @link https://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count()
    {
        return count($this->productQtyMapping);
    }
}