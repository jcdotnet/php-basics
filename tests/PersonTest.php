<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Person;

final class PersonTest extends TestCase
{
    private Person $person;

    protected function setUp(): void {
        $this->person = new Person();
    }

    public function testGetFullNameIsFirstNameAndSurname(): void {

        $this->person->setFirstName('Teresa');
        $this->person->setSurname('Green');

        $this->assertSame('Teresa Green', $this->person->getFullName());
    }

    public function testFullNameIsFirstNameWhenNoSurname(): void  {

        $this->person->setFirstName('Teresa');

        $this->assertSame('Teresa', $this->person->getFullName());
    }
}