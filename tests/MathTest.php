<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testPositiveIntegers()
    {
        $expected = 3;
        $result = \Math\addInt(1, 2);

        $this->assertSame(
            $expected,
            $result
        );
    }

    public function testPositiveAndNegativeIntegers()
    {
        $expected = 0;
        $result = \Math\addInt(1, -1);

        $this->assertSame(
            $expected,
            $result
        );
    }

    public function testNegativeIntegers()
    {
        $expected = -2;
        $result = \Math\addInt(-1, -1);

        $this->assertSame(
            $expected,
            $result
        );
    }

    public function testInvalidFirstArgument()
    {
        $this->expectException(\TypeError::class);

        \Math\addInt('hello', 1);
    }

    public function testInvalidSecondArgument()
    {
        $this->expectException(\TypeError::class);

        \Math\addInt(1, 'hello');
    }
}

