<?php

class Client
{

    public function __construct()
    {
        $subject = new Subject();

        $o1 = new Observer1();
        $o2 = new Observer2();
        $o3 = new Observer3();

        $subject->setData('Data for each 3 attached observers!');
        $subject->attach($o1);
        $subject->attach($o2);
        $subject->attach($o3);
        $subject->notify();

        $subject->detach($o3);
        $subject->setData('Data not for 3rd detached one!');
        $subject->notify();
    }
}
