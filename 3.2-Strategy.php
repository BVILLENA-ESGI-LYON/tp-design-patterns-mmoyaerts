<?php

interface PaymentStrategy {
    public function pay(float $amount);
}

class CreditCardPayment implements PaymentStrategy {
    private $cardNumber;
    private $expirationDate;
    private $cvv;

    public function __construct(string $cardNumber, string $expirationDate, string $cvv) {
        $this->cardNumber = $cardNumber;
        $this->expirationDate = $expirationDate;
        $this->cvv = $cvv;
    }

    public function pay(float $amount) {
        echo "Paiement de $amount € effectué par carte de crédit.\n";
    }
}

class PayPalPayment implements PaymentStrategy {
    private $email;
    private $password;

    public function __construct(string $email, string $password) {
        $this->email = $email;
        $this->password = $password;
    }

    public function pay(float $amount) {
        echo "Paiement de $amount € effectué via PayPal.\n";
    }
}

class ShoppingCart {
    private $paymentStrategy;

    public function setPaymentStrategy(PaymentStrategy $paymentStrategy) {
        $this->paymentStrategy = $paymentStrategy;
    }

    public function checkout(float $totalAmount) {
        $this->paymentStrategy->pay($totalAmount);
    }
}

// Utilisation du pattern Strategy
$cart = new ShoppingCart();

// Paiement par carte de crédit
$cart->setPaymentStrategy(new CreditCardPayment("1234567890123456", "12/25", "123"));
$cart->checkout(100.50);

$cart->setPaymentStrategy(new PayPalPayment("john@example.com", "password123"));
$cart->checkout(55.20);
