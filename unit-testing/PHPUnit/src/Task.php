<?php

namespace App;

class Task {

    private static int $next_id = 1;
    private int $id = 0;

    public function __construct(private string $title) {

        if ( trim( $title ) === '' ) {
            throw new \InvalidArgumentException('Title cannot be empty');
        }
        
        $this->id = self::$next_id++;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getTitle(): string {
        return $this->title;
    }
    
}