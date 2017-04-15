<?php

namespace RomansTest\Parser;

use PHPUnit\Framework\TestCase;
use Romans\Parser\Automaton;

/**
 * Automaton Test
 */
class AutomatonTest extends TestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->automaton = new Automaton();
    }

    /**
     * Test States
     */
    public function testStates()
    {
        $this->assertSame(Automaton::STATE_Z, 'Z');
        $this->assertSame(Automaton::STATE_A, 'A');
        $this->assertSame(Automaton::STATE_B, 'B');
        $this->assertSame(Automaton::STATE_C, 'C');
        $this->assertSame(Automaton::STATE_D, 'D');
        $this->assertSame(Automaton::STATE_E, 'E');
        $this->assertSame(Automaton::STATE_F, 'F');
        $this->assertSame(Automaton::STATE_G, 'G');
    }

    /**
     * Test Tokens
     */
    public function testTokens()
    {
        $this->assertSame(Automaton::TOKEN_N, 'N');
        $this->assertSame(Automaton::TOKEN_I, 'I');
        $this->assertSame(Automaton::TOKEN_V, 'V');
        $this->assertSame(Automaton::TOKEN_X, 'X');
        $this->assertSame(Automaton::TOKEN_L, 'L');
        $this->assertSame(Automaton::TOKEN_C, 'C');
        $this->assertSame(Automaton::TOKEN_D, 'D');
        $this->assertSame(Automaton::TOKEN_M, 'M');
    }

    /**
     * Test Initial State
     */
    public function testInitialState()
    {
        $this->assertSame(Automaton::STATE_G, $this->automaton->getState());
    }

    /**
     * Test Zero
     */
    public function testZero()
    {
        $this->assertSame($this->automaton, $this->automaton->read([Automaton::TOKEN_N]));
        $this->assertSame(Automaton::STATE_Z, $this->automaton->getState());
    }
}
