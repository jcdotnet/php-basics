<?php

namespace App;

class Dog extends Animal {
    
    protected function getAction(): string {
        return 'barks';
    }
} 