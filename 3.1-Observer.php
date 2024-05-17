<?php

interface Observable {
    public function addObserver(Observer $observer);
    public function removeObserver(Observer $observer);
    public function notifyObservers();
}

interface Observer {
    public function update(string $data);
}

class Subject implements Observable {
    private $observers = [];
    private $data;

    public function addObserver(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer) {
        $index = array_search($observer, $this->observers);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    public function setData($data) {
        $this->data = $data;
        $this->notifyObservers();
    }

    public function notifyObservers() {
        foreach ($this->observers as $observer) {
            $observer->update($this->data);
        }
    }
}

class ConcreteObserver implements Observer {
    public function update(string $data) {
        echo "Observateur notifié avec les données : $data\n";
    }
}

// Utilisation du pattern Observer
$subject = new Subject();

$observer1 = new ConcreteObserver();
$observer2 = new ConcreteObserver();

$subject->addObserver($observer1);
$subject->addObserver($observer2);

$subject->setData("Nouvelles données !");
