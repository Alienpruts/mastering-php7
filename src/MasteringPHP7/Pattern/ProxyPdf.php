<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 10:17
 */

namespace MasteringPHP7\Pattern;


class ProxyPdf implements PdfInterface
{

    private $pdf = null;
    private $data;

    /**
     * ProxyPdf constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }


    public function generate()
    {
        if ($this->pdf === null){
            $this->pdf = new Pdf($this->data);
        }
        $this->pdf->generate();
    }
}