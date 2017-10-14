<?php

namespace Autocode\Domain\Entity\Code;

use Autocode\Domain\Entity\Code\AcClass;
use PHPUnit\Framework\TestCase;

/**
 * Class When_GettersAreDisabled_HasGetters_ReturnFalse_Test
 *
 * R01007:
 * When class definition has getters disabled, ::hasGetters method must return false.
 *
 * @package Autocode\Domain\Entity\Code
 * @coversDefaultClass \Autocode\Domain\Entity\Code\AcClass
 */
class When_GettersAreDisabled_HasGetters_ReturnFalse_Test extends TestCase
{
    /**
     * @covers ::hasGetters
     * @covers ::hasMethod
     */
    public function test()
    {
        $acClass = AcClassBuilder::init()
            ->setFullyQualifiedName('TestingClass')
            ->setDefinition(['attributes' => [], 'methods' => ['get' => false]])
            ->get();
        $this->assertFalse($acClass->hasGetters());
    }
}
