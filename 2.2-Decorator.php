<?php

    interface Coffee {
    public function cost();
    public function description();
}

class SimpleCoffee implements Coffee {
    public function cost() {
        return 1;
    }

    public function description() {
        return "Café simple";
    }
}

abstract class CoffeeDecorator implements Coffee {
    protected $coffee;

    public function __construct(Coffee $coffee) {
        $this->coffee = $coffee;
    }

    public function cost() {
        return $this->coffee->cost();
    }

    public function description() {
        return $this->coffee->description();
    }
}

class WithMilk extends CoffeeDecorator {
    public function cost() {
        return $this->coffee->cost() + 0.5;
    }

    public function description() {
        return $this->coffee->description() . ", avec du lait";
    }
}

class WithSugar extends CoffeeDecorator {
    public function cost() {
        return $this->coffee->cost() + 0.3;
    }

    public function description() {
        return $this->coffee->description() . ", avec du sucre";
    }
}

// Utilisation du Decorator
$coffee = new SimpleCoffee();
echo $coffee->description(), " : ", $coffee->cost(), "$\n";

$coffee_with_milk = new WithMilk($coffee);
echo $coffee_with_milk->description(), " : ", $coffee_with_milk->cost(), "$\n";

$coffee_with_sugar = new WithSugar($coffee);
echo $coffee_with_sugar->description(), " : ", $coffee_with_sugar->cost(), "$\n";

$coffee_with_milk_and_sugar = new WithSugar(new WithMilk($coffee));
echo $coffee_with_milk_and_sugar->description(), " : ", $coffee_with_milk_and_sugar->cost(), "$\n";

