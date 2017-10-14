<?php

namespace Autocode\Domain\Entity\Code;

use PHPUnit\Framework\TestCase;

/**
 * Class When_SettersAreDisabled_HasSetters_ReturnFalse_Test
 *
 * R01011:
 * When class definition has setters disabled, ::hasSetters method must return false.
 *
 * @package Autocode\Domain\Entity\Code
 * @coversDefaultClass \Autocode\Domain\Entity\Code\AcClass
 */
class When_SettersAreDisabled_HasSetters_ReturnFalse_Test extends TestCase
{
    /**
     * @covers ::hasGetters
     * @covers ::hasMethod
     */
    public function test()
    {
        $acClass = new AcClass();
        $acClass->setDefinition(['attributes' => [], 'methods' => ['set' => false]]);
        $this->assertFalse($acClass->hassetters());
    }
}
