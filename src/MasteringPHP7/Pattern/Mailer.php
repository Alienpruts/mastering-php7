<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 28/11/18
 * Time: 10:06
 */

namespace MasteringPHP7\Pattern;


use SplSubject;

class Mailer implements \SplObserver
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
        echo 'Mailing ' . get_class($subject->getSalesOrder()) . PHP_EOL;
    }
}