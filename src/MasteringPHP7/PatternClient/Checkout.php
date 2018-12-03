<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 9:42
 */

namespace MasteringPHP7\PatternClient;


use MasteringPHP7\Pattern\FedExShipment;
use MasteringPHP7\Pattern\UPSShipment;

class Checkout
{
    private $amount;

    /**
     * Checkout constructor.
     */
    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function estimateShipment()
    {
        if ($this->amount > 199.99){
            $shipment = new FedExShipment();
        } else {
            $shipment = new UPSShipment();
        }

        return $shipment->calculate($this->amount);
    }
}