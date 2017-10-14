<?php

namespace Autocode\Domain\Entity\Code;

use PHPUnit\Framework\TestCase;

/**
 * Class When_SettersAreNull_HasSetters_DefaultsToReturnTrue_Test
 *
 * R01012
 * When class definition has no configuration for setters, ::hasSetters method must return true (as default value).
 *
 * @package Autocode\Domain\Entity\Code
 * @coversDefaultClass \Autocode\Domain\Entity\Code\AcClass
 */
class When_SettersAreNull_HasSetters_DefaultsToReturnTrue_Test extends TestCase
{
    /**
     * @covers ::hasSetters
     * @covers ::hasMethod
     */
    public function test()
    {
        $acClass = new AcClass;
        $acClass->setDefinition(['attributes' => [], 'methods' => ['set' => true]]);
        $this->assertTrue($acClass->hasSetters());
    }
}
