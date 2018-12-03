<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 10:15
 */

namespace MasteringPHP7\Pattern;


class Pdf implements PdfInterface
{
    private $data;

    /**
     * Pdf constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;

        //resource Heavy operations !!!
        sleep(3);
    }


    public function generate()
    {
        echo 'PDF : ' . $this->data;

    }
}