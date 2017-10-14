<?php

namespace Autocode\Domain\Entity\Code;

use PHPUnit\Framework\TestCase;

/**
 * Class When_InitIsCalled_WillReturn_NewObject_Test
 * @package Autocode\Domain\Entity\Code
 * @coversDefaultClass \Autocode\Domain\Entity\Code\AcClassBuilder
 */
class When_InitIsCalled_WillReturn_NewObject_Test extends TestCase
{
    /**
     * @covers ::init
     * @covers ::__construct
     */
    public function test()
    {
        $this->assertTrue(AcClassBuilder::init() instanceof AcClassBuilder);
    }
}
