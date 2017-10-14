<?php

namespace Autocode\Domain\Entity\Code;

use PHPUnit\Framework\TestCase;

/**
 * Class When_GetIsCalled_WillReturn_AcClass_Test
 * @package Autocode\Domain\Entity\Code
 * @coversDefaultClass \Autocode\Domain\Entity\Code\AcClassBuilder
 */
class When_GetIsCalled_WillReturn_AcClass_Test extends TestCase
{
    /**
     * @covers ::get
     * @covers ::__construct
     */
    public function test()
    {
        $this->assertTrue(AcClassBuilder::init()->get() instanceof AcClass);
    }
}
