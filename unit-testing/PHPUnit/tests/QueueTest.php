<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class QueueTest extends TestCase
{
    private Queue $queue;

    protected function setUp(): void
    {
        $this->queue = new Queue();
    }

    /**
     * to use when using a lot of memory
     * especially allocating external resources
     *  
     * protected function tearDown(): void
     * {
     *    unset($this->queue);
     * }
    */

    public function testNewQueueIsEmpty(): void
    {
        $this->assertSame(0, $this->queue->getSize());
    }

    public function testPushAddsItem(): void
    {
        $this->queue->push('an item');

        $this->assertSame(1, $this->queue->getSize());
    }

    public function testPopRemovesAndReturnsItem(): void
    {
        $this->queue->push('an item');

        $this->assertSame('an item', $this->queue->pop());
        $this->assertSame(0, $this->queue->getSize());
    }

    public function testAnItemIsRemovedFromTheFrontOfTheQueue(): void
    {
        $this->queue->push('first');
        $this->queue->push('second');

        $this->assertSame('first', $this->queue->pop());
    }

    public function testPopThrowsExceptionWhenQueueIsEmpty(): void
    {
        // this test methods need to go before the line that throws the exception
        $this->expectException(\UnderflowException::class);
        $this->expectExceptionMessage('Queue is empty');

        $this->queue->pop();
    }
}