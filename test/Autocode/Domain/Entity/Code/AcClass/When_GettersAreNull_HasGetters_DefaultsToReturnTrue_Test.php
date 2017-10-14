<?php

namespace Autocode\Domain\Entity\Code;

use PHPUnit\Framework\TestCase;

/**
 * Class When_GettersAreNull_HasGetters_DefaultsToReturnTrue_Test
 *
 * R01008:
 * When class definition has no configuration for getters, ::hasGetters method must return true (as default value).
 *
 * @package Autocode\Domain\Entity\Code
 * @coversDefaultClass \Autocode\Domain\Entity\Code\AcClass
 */
class When_GettersAreNull_HasGetters_DefaultsToReturnTrue_Test extends TestCase
{
    /**
     * @covers ::hasGetters
     * @covers ::hasMethod
     */
    public function test()
    {
        $acClass = new AcClass();
        $acClass->setDefinition(['attributes' => [], 'methods' => []]);
        $this->assertTrue($acClass->hasGetters());
    }
}
