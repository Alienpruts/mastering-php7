<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 2/12/18
 * Time: 11:42
 */

use MasteringPHP7\PHPUnitDemo\Category;
use MasteringPHP7\PHPUnitDemo\CategoryView;
use MasteringPHP7\PHPUnitDemo\Product;

require_once __DIR__ . '/../vendor/autoload.php';

$category =  new Category('Laptops', [
    new Product('RL', 'Red Laptop', 1499.99, 25),
    new Product('YL', 'Yellow Laptop', 2499.99, 25),
    new Product('BL', 'Blue Laptop', 3499.99, 25),
]);

$categoryView = new CategoryView($category);

echo $categoryView->render();