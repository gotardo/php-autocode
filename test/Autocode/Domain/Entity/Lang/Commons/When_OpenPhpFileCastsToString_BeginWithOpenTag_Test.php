<?php

namespace Autocode\Domain\Entity\Lang\Commons;

use PHPUnit\Framework\TestCase;

/**
 * Class When_OpenPhpFileCastsToString_BeginWithOpenTag_Test
 * @package Autocode\Domain\Entity\Lang\Commons
 * @coversDefaultClass \Autocode\Domain\Entity\Lang\Commons\OpenPhpFile
 */
class When_OpenPhpFileCastsToString_BeginWithOpenTag_Test extends TestCase
{
    /**
     * @covers ::__toString
     */
    public function test()
    {
        $code = new OpenPhpFile();
        $this->assertStringStartsWith("<?php", (string) $code);
    }
}
