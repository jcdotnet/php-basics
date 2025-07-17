<?php

namespace App;

abstract class Animal {

    public function __construct(private string $name) {
        
    }

    abstract protected function getAction(): string;

    public function getAnimalString(): string {
        return  $this->name . ' ' . $this->getAction();
    }
}