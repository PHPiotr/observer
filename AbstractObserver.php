<?php

/**
 * Class AbstractObserver
 */
abstract class AbstractObserver implements SplObserver
{
    /**
     * @param AbstractSubject $subject
     */
    abstract public function updateData(AbstractSubject $subject);

    /**
     * @param SplSubject $subject
     */
    public final function update(\SplSubject $subject)
    {
        $this->updateData($subject);
    }
}
