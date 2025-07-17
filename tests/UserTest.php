<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{
    public function testCorrectPasswordAuthenticatesSuccessfully(): void
    {
        $user = new User('testUser', 'secret');

        $this->assertTrue($user->authenticate('secret'));
    }

    public function testIncorrectPasswordFailsAuthentication(): void
    {
        $user = new User('testUser', 'secret');

        $this->assertFalse($user->authenticate('dasdsad'));
    }

    // testing non-public should be considered if we're expecting the User class to be extended
    public function testPasswordHashIsMinimumLength(): void
    {
        $reflector = new ReflectionClass(User::class);

        $method = $reflector->getMethod('hashPassword');

        $user = new User('userTest', 'secret');

        $hash = $method->invoke($user, 'secret');

        $this->assertGreaterThanOrEqual(60, strlen($hash));
    }

    public function testAlgorithmHasADefaultValue(): void
    {
        $user = new User('testUser', 'secret');

        $reflector = new ReflectionClass(User::class);

        $property = $reflector->getProperty('algorithm');

        $value = $property->getValue($user);

        $this->assertNotNull($value);
    }

}
