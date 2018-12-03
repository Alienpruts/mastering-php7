<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 10:19
 */

use MasteringPHP7\Pattern\Pdf;
use MasteringPHP7\Pattern\ProxyPdf;

require_once __DIR__ . '/vendor/autoload.php';

$pdf = new Pdf('<h1>Hello</h1>');
$pdf->generate();

$pdf = new ProxyPdf('<h1>Hello</h1>');
// Uncomment : this will also take 3 seconds, but only when we need it instead of when using new keyword.
///$pdf->generate();