<?php

namespace App;

class TodoManager { 

    private array $tasks = [];

    public function getTasks(): array {

        return $this->tasks;  
    }

    public function add(Task $task): void {
        $this->tasks[] = $task;
    }

}