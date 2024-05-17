<?php 

interface Vehicle {
	public function drive();
}

class Car implements Vehicle {
	public function drive() {
    	echo "Driving a car.";
	}
}

class Bike implements Vehicle {
	public function drive() {
    	echo "Riding a bike.";
	}
}

interface VehicleFactory {
	public function createVehicle();
}

class CarFactory implements VehicleFactory {
	public function createVehicle() {
    	return new Car();
	}
}

class BikeFactory implements VehicleFactory {
	public function createVehicle() {
    	return new Bike();
	}
}
