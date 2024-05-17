<?php

class Subsystem1 {
    public function operation1() {
        return "Sous-système 1 : Prêt !\n";
    }

    public function operation2() {
        return "Sous-système 1 : En cours...\n";
    }
}

class Subsystem2 {
    public function operation1() {
        return "Sous-système 2 : Prêt !\n";
    }

    public function operation2() {
        return "Sous-système 2 : En cours...\n";
    }
}

class Facade {
    protected $subsystem1;
    protected $subsystem2;

    public function __construct() {
        $this->subsystem1 = new Subsystem1();
        $this->subsystem2 = new Subsystem2();
    }

    public function operation() {
        $result = "Facade initialise les sous-systèmes :\n";
        $result .= $this->subsystem1->operation1();
        $result .= $this->subsystem2->operation1();
        $result .= "Facade exécute une action intégrée :\n";
        $result .= $this->subsystem1->operation2();
        $result .= $this->subsystem2->operation2();

        return $result;
    }
}

// Utilisation de la Facade
$facade = new Facade();
echo $facade->operation();


