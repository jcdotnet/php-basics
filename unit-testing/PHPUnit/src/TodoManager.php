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

    public function delete(int $id): void {
        $this->tasks = array_filter( $this->tasks, function( Task $task ) use ($id) {
            return $task->getId() !== $id;
        } );

        $this->tasks = array_values( $this->tasks );
    }

}