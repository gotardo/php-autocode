<?php

namespace Autocode\Domain\Entity\Code;

use PHPUnit\Framework\TestCase;

/**
 * Class When_SetNamespaceIsCalled_GetNamespace_ReturnsSameValue_Test
 *
 * @package Autocode\Domain\Entity\Code
 * @coversDefaultClass \Autocode\Domain\Entity\Code\AcClass
 */
class When_SetNamespaceIsCalled_GetNamespace_ReturnsSameValue_Test extends TestCase
{
    /**
     * @covers ::getNamespace
     * @covers ::setNamespace
     */
    public function test()
    {
        $namespace = '\My\Namespace';
        $acClass = new AcClass();

        $acClass->setNamespace($namespace);

        $this->assertEquals($namespace, $acClass->getNamespace());
    }
}
