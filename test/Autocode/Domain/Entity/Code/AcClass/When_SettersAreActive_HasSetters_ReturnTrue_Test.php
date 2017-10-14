<?php

namespace Autocode\Domain\Entity\Code;

use PHPUnit\Framework\TestCase;

/**
 * Class When_SettersAreActive_HasSetters_ReturnTrue_Test
 *
 * R01010:
 * When class definition has setters actived, ::hasSetters method must return true.
 *
 * @package Autocode\Domain\Entity\Code
 * @coversDefaultClass \Autocode\Domain\Entity\Code\AcClass
 */
class When_SettersAreActive_HasSetters_ReturnTrue_Test extends TestCase
{
    /**
     * @covers ::hasSetters
     * @covers ::hasMethod
     */
    public function test()
    {
        $acClass = AcClassBuilder::init()
            ->setFullyQualifiedName('TestingClass')
            ->setDefinition(['attributes' => [], 'methods' => ['set' => true]])
            ->get();
        $this->assertTrue($acClass->hasSetters());
    }
}
