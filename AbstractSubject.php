<?php

/**
 * Class AbstractSubject
 */
abstract class AbstractSubject implements SplSubject
{
    /**
     * @param $data
     * @return void
     */
    abstract public function setData(string $data);

    /**
     * @return array
     */
    abstract public function getData();

    /**
     * @param SplObjectStorage $observers
     * @return void
     */
    abstract public function setObservers(SplObjectStorage $observers);

    /**
     * @return SplObjectStorage
     */
    abstract public function getObservers();
}
