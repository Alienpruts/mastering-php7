<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 9:41
 */

namespace MasteringPHP7\Pattern;


class FedExShipment implements ShipmentStrategy
{

    public function calculate($amount)
    {
        return 'FedEx Shipment .... ';
    }
}