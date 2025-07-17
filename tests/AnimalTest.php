<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class AnimalTest extends TestCase
{
    public function testAnimalStringIsNameAndAction(): void
    {
        $dog = new App\Dog('Luna');

        $this->assertSame('Luna barks', $dog->getAnimalString());
    }

    public function testAnimalStringIsNameAndActionWithMock(): void
    {
        $mock = $this->getMockBuilder(App\Animal::class)
                     ->setConstructorArgs(['Luna'])
                     ->onlyMethods(['getAction'])
                     ->getMock();

        $mock->method('getAction')
             ->willReturn('barks');

        $this->assertSame('Luna barks', $mock->getAnimalString());
    }
}