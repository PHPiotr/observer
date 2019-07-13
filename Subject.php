<?php

class Subject extends AbstractSubject
{
    private $observers;
    private $data;

    public function __construct()
    {
        $this->setObservers(new SplObjectStorage());
    }

    public function setData(string $data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    /**
     * @param SplObjectStorage $observers
     * @return mixed|void
     */
    public function setObservers(SplObjectStorage $observers)
    {
        $this->observers = $observers;
    }

    public function getObservers()
    {
        return $this->observers;
    }

    public function attach(\SplObserver $observer)
    {
        $this->getObservers()->attach($observer);
        return $this;
    }

    public function detach(\SplObserver $observer)
    {
        $this->getObservers()->detach($observer);
        return $this;
    }

    public function notify()
    {
        foreach ($this->getObservers() as $observer) {
            $observer->update($this);
        }
    }
}
