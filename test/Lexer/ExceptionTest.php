<?php

declare(strict_types=1);

namespace RomansTest\Lexer;

use PHPUnit\Framework\TestCase;
use Romans\Lexer\Exception;
use TypeError;

/**
 * Exception Test
 */
class ExceptionTest extends TestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        $this->exception = new Exception();
    }

    /**
     * Test Code
     */
    public function testCode(): void
    {
        $this->assertSame(1, Exception::UNKNOWN_TOKEN);
    }

    /**
     * Test Token
     */
    public function testToken(): void
    {
        $this->assertNull($this->exception->getToken());

        $this->assertSame($this->exception, $this->exception->setToken('.'));
        $this->assertSame('.', $this->exception->getToken());

        $this->assertSame($this->exception, $this->exception->setToken(null));
        $this->assertNull($this->exception->getToken());
    }

    /**
     * Test Token with Invalid Type
     */
    public function testTokenWithInvalidType(): void
    {
        $this->expectException(TypeError::class);

        $this->exception->setToken(0);
    }

    /**
     * Test Position
     */
    public function testPosition(): void
    {
        $this->assertNull($this->exception->getPosition());

        $this->assertSame($this->exception, $this->exception->setPosition(1));
        $this->assertSame(1, $this->exception->getPosition());

        $this->assertSame($this->exception, $this->exception->setPosition(0));
        $this->assertSame(0, $this->exception->getPosition());

        $this->assertSame($this->exception, $this->exception->setPosition(null));

        $this->assertNull($this->exception->getPosition());
    }

    /**
     * Test Position with Invalid Type
     */
    public function testPositionWithInvalidType(): void
    {
        $this->expectException(TypeError::class);

        $this->exception->setPosition('FOOBAR');
    }
}
