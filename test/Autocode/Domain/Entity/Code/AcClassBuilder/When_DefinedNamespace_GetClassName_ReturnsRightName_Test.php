<?php

namespace Autocode\Domain\Entity\Code;

use PHPUnit\Framework\TestCase;

/**
 * Class GetClassName_ReturnsRightName_WithNamespacedClassName_Test
 *
 * R01001:
 * When the class has a defined namespace the parser must return the right class name.
 *
 * @package Autocode\Domain\Entity\Code
 * @coversDefaultClass \Autocode\Domain\Entity\Code\AcClassBuilder
 */
class When_DefinedNamespace_GetClassName_ReturnsRightName_Test extends TestCase
{
    /**
     * @covers ::setFullyQualifiedName
     * @covers ::__construct
     * @dataProvider \Autocode\Domain\Entity\Code\AcClass\Provider::validClassNameProvider
     */
    public function test($classFullQualifiedName)
    {
        $acClass = AcClassBuilder::init()
            ->setFullyQualifiedName($classFullQualifiedName)
            ->setDefinition(['attributes' => []])
            ->get();
        $generatedClassName = $acClass->getClassName();
        $this->assertEquals('ClassName', $generatedClassName);
    }
}
