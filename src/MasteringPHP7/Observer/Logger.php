<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 25/11/18
 * Time: 10:21
 */

namespace MasteringPHP7\Observer;


use MasteringPHP7\Event\UserRegister;
use SplSubject;

class Logger implements \SplObserver
{

    /**
     * Receive update from subject
     * @link https://php.net/manual/en/splobserver.update.php
     * @param SplSubject $subject <p>
     * The <b>SplSubject</b> notifying the observer of an update.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function update(SplSubject $subject)
    {
        if ($subject instanceof UserRegister){
            echo 'Logging ' . $subject->getUser() . PHP_EOL;
        }
    }
}