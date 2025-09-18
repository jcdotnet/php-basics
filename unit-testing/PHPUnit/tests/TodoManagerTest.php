<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\TodoManager;
use App\Task;

final class TodoManagerTest extends TestCase
{

    private TodoManager $manager;
    
    protected function setUp(): void {

        $this->manager = new TodoManager();
    }


    public function testTaskListIsInitiallyEmpty(): void {
        
        $tasks = $this->manager->getTasks();

        $this->assertCount(0, $tasks);
    }

    public function testTaskIsAddedToList(): void {
        
        $task = new Task('Buy milk');

        $this->manager->add($task);

        $tasks = $this->manager->getTasks();

        $this->assertCount(1, $tasks);
        $this->assertSame($task, $tasks[0]);
    }

    public function testTaskIsRemovedFromList(): void {
        $task1 = new Task('Clean windows');
        $task2 = new Task('Make cake');

        $this->manager->add($task1);
        $this->manager->add($task2);

        $id = $task1->getId();

        $this->manager->delete($id);

        $tasks = $this->manager->getTasks();

        $this->assertCount(1, $tasks);
        $this->assertSame($task2, $tasks[0]);
    }

}