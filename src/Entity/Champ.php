<?php

namespace App\Entity;

use App\Observer\ObserverInterface;
use DateTime;

    class Champ
    {
        private $observers = [];    
        private int $id;

        private string $name;

        private string $region;

        private int $baseAD;

        private string $role;

        private DateTime $date;


    public function __construct() {
        $this->date = new DateTime();
        $this->baseAD = 0;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getRegion(): string
    {
        return $this->region;
    }

    public function setRegion(string $region): self
    {
        $this->region = $region;
        return $this;
    }

    public function getBaseAD(): int
    {
        return $this->baseAD;
    }

    public function setBaseAD($baseAD): self
    {
        $this->baseAD = $baseAD;
        return $this;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;
        return $this;
    }

    public function getDate(): DateTime
    {
        return $this->date;
    }

    public function setDate(DateTime $date): self
    {
        $this->date = $date;
        return $this;
    }

}