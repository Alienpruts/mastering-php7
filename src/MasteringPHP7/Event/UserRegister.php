<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 25/11/18
 * Time: 10:12
 */

namespace MasteringPHP7\Event;


use SplObserver;

class UserRegister implements \SplSubject
{
    private $user;
    private $observers;

    /**
     * UserRegister constructor.
     */
    public function __construct($user)
    {
        $this->user = $user;
        $this->observers = new \SplObjectStorage();
    }


    /**
     * Attach an SplObserver
     * @link https://php.net/manual/en/splsubject.attach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to attach.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * Detach an observer
     * @link https://php.net/manual/en/splsubject.detach.php
     * @param SplObserver $observer <p>
     * The <b>SplObserver</b> to detach.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    /**
     * Notify an observer
     * @link https://php.net/manual/en/splsubject.notify.php
     * @return void
     * @since 5.1.0
     */
    public function notify()
    {
        /** @var \SplObserver$observer */
        foreach ($this->observers as $observer){
            $observer->update($this);
        }
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }


}