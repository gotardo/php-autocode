<?php

namespace Autocode\Domain\Service\Validation;

use PHPUnit\Framework\TestCase;

/**
 * Class When_AttributesAreDefined_Validate_ReturnsRawCodeArrayextends
 *
 * R01009
 * When Attributes are defined, ::validate returns raw code array.
 *
 * @package Autocode\Domain\Service\Validation\RawCodeValidator
 * @coversDefaultClass \Autocode\Domain\Service\Validation\RawCodeValidator
 */
class When_AttributesAreDefined_Validate_ReturnsRawCodeArray_Test extends TestCase
{
    /**
     * @covers ::validate
     * @covers ::hasAttributesDefined
     */
    public function test()
    {
        $rawCode = ['attributes' => ['id' => []]];
        $sut = new RawCodeValidator();
        $this->assertEquals($rawCode, $sut->validate($rawCode));
    }
}
