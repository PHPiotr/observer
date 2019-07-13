<?php

class Observer2 extends AbstractObserver
{

    public function updateData(AbstractSubject $subject)
    {
        echo __CLASS__ . ': ' . $subject->getData();
        echo '<hr />';
    }
}
