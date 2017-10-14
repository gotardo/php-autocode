<?php

namespace Autocode\Domain\Entity\Code;

use PHPUnit\Framework\TestCase;

/**
 * Class GetClassName_ReturnsRightName_WithSingleClassName_Test
 *
 * R01003:
 * When class name has no namespace, method ::getClassName must return the right class name.
 *
 * @package Autocode\Domain\Entity\Code
 * @coversDefaultClass \Autocode\Domain\Entity\Code\AcClassBuilder
 */
class When_NoNamespace_GetClassName_ReturnsRightClassName_Test extends TestCase
{
    /**
     * @covers ::setFullyQualifiedName
     * @covers ::__construct
     */
    public function test()
    {
        $acClass = AcClassBuilder::init()
            ->setFullyQualifiedName('ClassName')
            ->setDefinition(['attributes' => []])
            ->get();
        $generatedClassName = $acClass->getClassName();
        $this->assertEquals('ClassName', $generatedClassName);
    }
}
