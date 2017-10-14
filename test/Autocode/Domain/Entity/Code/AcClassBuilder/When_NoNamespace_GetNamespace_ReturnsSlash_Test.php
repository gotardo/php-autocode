<?php

namespace Autocode\Domain\Entity\Code;

use PHPUnit\Framework\TestCase;

/**
 * Class When_NoNamespace_GetNamespace_ReturnsSlash_Test
 *
 * R01004:
 * When class name has no namespace, method ::getNamespace must return root namespace '\'.
 *
 * @package Autocode\Domain\Entity\Code
 * @coversDefaultClass \Autocode\Domain\Entity\Code\AcClassBuilder
 */
class When_NoNamespace_GetNamespace_ReturnsSlash_Test extends TestCase
{
    /**
     * @covers ::setFullyQualifiedName
     * @covers ::__construct
     */
    public function test()
    {
        $acClass = AcClassBuilder::init()
            ->setFullyQualifiedName('TestingClass')
            ->setDefinition(['attributes' => []])
            ->get();
        $generatedNamespace= $acClass->getNamespace();
        $this->assertEquals('\\', $generatedNamespace);
    }
}
