<?php

class Observer3 implements SplObserver
{

    public function update(\SplSubject $subject)
    {
        echo __CLASS__ . ': ' . $subject->getData();
        echo '<hr />';
    }
}
