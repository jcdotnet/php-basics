<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class ValidatorTest extends TestCase
{
    public static function emailProvider(): array
    {
        return [
            'valid email'    => ['dave@example.com', true],
            'no @'           => ['daveexample.com', false],
            'invalid domain' => ['user@invalid_domain', false],
            'empty email'    => ['', false]
        ];
    }

    #[DataProvider('emailProvider')]
    public function testEmailValidation(string $email, bool $expected): void
    {
        $this->assertSame($expected, Validator::isValidEmail($email));
    }
}
