<?php

namespace Autocode\Domain\Entity\Code;

use PHPUnit\Framework\TestCase;

/**
 * Class When_GettersAreActive_HasGetters_ReturnTrue_Test
 *
 * R01006:
 * When class definition has getters actived, ::hasGetters method must return true.
 *
 * @package Autocode\Domain\Entity\Code
 * @coversDefaultClass \Autocode\Domain\Entity\Code\AcClass
 */
class When_GettersAreActive_HasGetters_ReturnTrue_Test extends TestCase
{
    /**
     * @covers ::hasGetters
     * @covers ::hasMethod
     */
    public function test()
    {
        $acClass = AcClassBuilder::init()
            ->setFullyQualifiedName('TestingClass')
            ->setDefinition(['attributes' => [], 'methods' => ['get' => true]])
            ->get();
        $this->assertTrue($acClass->hasGetters());
    }
}
