<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 2/12/18
 * Time: 11:28
 */
declare(strict_types=1);
namespace MasteringPHP7\PHPUnitDemo;


class Product
{
    private $id;
    private $title;
    private $price;
    private $taxRate;


    /**
     * Product constructor.
     */
    public function __construct(string $id, string $title, float $price, int $taxRate)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->taxRate = $taxRate;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getTaxRate(): int
    {
        return $this->taxRate;
    }


}