<?php

use PHPUnit\Framework\TestCase;
use function php\strlen;

class StringTest extends TestCase
{
    public function testStrlenReturnsLengthOfString()
    {
        $this->assertSame(6, strlen('Halloo'));
    }

    public function testStrlenIsNotBinarySafe()
    {
        $this->assertSame(6, strlen('Hällo'));
    }

    public function testStrlenReturnsZeroWhenStringIsNull()
    {
        $this->assertSame(0, strlen(null));
    }
}
