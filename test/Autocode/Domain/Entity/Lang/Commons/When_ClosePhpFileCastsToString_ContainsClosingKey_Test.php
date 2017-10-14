<?php

namespace Autocode\Domain\Entity\Lang\Commons;

use PHPUnit\Framework\TestCase;

/**
 * Class When_ClosePhpFileCastsToString_ContainsClosingKey_Test
 * @package Autocode\Domain\Entity\Lang\Commons
 * @coversDefaultClass \Autocode\Domain\Entity\Lang\Commons\ClosePhpFile
 */
class When_ClosePhpFileCastsToString_ContainsClosingKey_Test extends TestCase
{
    /**
     * @covers ::__toString
     */
    public function test()
    {
        $code = new ClosePhpFile();
        $this->assertContains("}", (string) $code);
    }
}
