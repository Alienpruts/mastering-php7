<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 1/12/18
 * Time: 21:36
 */

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

require_once __DIR__ . '/../vendor/autoload.php';


$container = new ContainerBuilder();

$loader = new YamlFileLoader($container, new FileLocator(__DIR__));

$loader->load('container.yml');

$container->compile();

$app = $container->get('app');
$app->run();