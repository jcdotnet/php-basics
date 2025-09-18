<?php

// declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

final class FunctionsTest extends TestCase {

    public static function additionProvider(): array {
        return [
            'positive integers' => [2, 3, 5],
            'negative integers' => [-2, -3, -5],
            'zero and integer'  => [3, 0, 3],
        ];
    }

    #[DataProvider('additionProvider')]
    public function testAddIntegers(int $a, int $b, int $expected): void {
        $this->assertSame($expected, addIntegers($a, $b));
    }

    public function testAddingIsCommutative(): void
    {
        $this->assertSame(addIntegers(3, 2), addIntegers(2, 3));
    }
}