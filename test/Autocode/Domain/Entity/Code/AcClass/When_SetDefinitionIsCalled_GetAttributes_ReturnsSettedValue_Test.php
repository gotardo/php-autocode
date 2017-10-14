<?php

namespace Autocode\Domain\Entity\Code;

use PHPUnit\Framework\TestCase;

/**
 * Class When_SetDefinitionIsCalled_GetAttributes_ReturnsSettedValue_Test
 *
 * @package Autocode\Domain\Entity\Code
 * @coversDefaultClass \Autocode\Domain\Entity\Code\AcClass
 */
class When_SetDefinitionIsCalled_GetAttributes_ReturnsSettedValue_Test extends TestCase
{
    /**
     * @covers ::getAttributes
     */
    public function test()
    {
        $acClass = new AcClass();
        $attributes = ['id' => []];

        $acClass->setDefinition(['attributes' => $attributes]);

        $this->assertEquals($attributes, $acClass->getAttributes());
    }
}
