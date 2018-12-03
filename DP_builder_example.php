<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 9:19
 */

use MasteringPHP7\Pattern\ImageBuildDirector;
use MasteringPHP7\Pattern\ImageBuilder;

require_once __DIR__ . '/vendor/autoload.php';

$imageBuilder = new ImageBuilder();
$imageBuildDirecotr = new ImageBuildDirector($imageBuilder);
$image = $imageBuildDirecotr->build()->getImage();

var_dump($image);