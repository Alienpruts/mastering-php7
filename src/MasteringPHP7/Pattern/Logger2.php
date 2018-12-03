<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 11:59
 */

namespace MasteringPHP7\Pattern;


abstract class Logger2
{
    private $logNext = null;

    public function logNext(Logger2 $logger)
    {
        $this->logNext = $logger;
        return $this->logNext;
    }

    final public function push($message)
    {
        $this->log($message);

        if ($this->logNext !== null){
            $this->logNext->push($message);
        }
    }

    abstract protected function log($message);
}