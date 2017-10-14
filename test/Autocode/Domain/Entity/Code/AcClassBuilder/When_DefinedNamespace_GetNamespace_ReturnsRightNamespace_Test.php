<?php

Namespace Autocode\Domain\Entity\Code;

use PHPUnit\Framework\TestCase;

/**
 * Class When_DefinedNamespace_GetNamespace_ReturnsRightNamespace_Test
 *
 * R01002:
 * When the class has a defined namespace the parser must return the right namespace.
 *
 * @package Autocode\Domain\Entity\Code
 * @coversDefaultClass \Autocode\Domain\Entity\Code\AcClassBuilder
 */
class When_DefinedNamespace_GetNamespace_ReturnsRightNamespace_Test extends TestCase
{
    /**
     * @covers ::setFullyQualifiedName
     * @covers ::__construct
     * @dataProvider validClassNameProvider
     */
    public function test($classFullQualifiedName, $expectedNamespace)
    {
        $acClass = AcClassBuilder::init()
            ->setFullyQualifiedName($classFullQualifiedName)
            ->setDefinition(['attributes' => []])
            ->get();
        $generatedNamespace = $acClass->getNamespace();
        $this->assertEquals($expectedNamespace, $generatedNamespace);
    }

    public function validClassNameProvider()
    {
        return [
            ['\My\ClassName', '\My'],
            ['My\Namespace\ClassName', '\My\Namespace'],
            ['\My\Namespace\ClassName', '\My\Namespace'],
        ];
    }
}
