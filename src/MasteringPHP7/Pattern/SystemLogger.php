<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 1:12
 */

namespace MasteringPHP7\Pattern;


class SystemLogger extends Logger
{

    /**
     * SystemLogger constructor.
     */
    public function __construct()
    {
        $this->channel = 'STDIN';
    }

    public function __clone()
    {
        // changes after clone behavior ?
    }


    public function log($data)
    {
        return sprintf('Logging %s to %s', $data, $this->channel);
    }
}