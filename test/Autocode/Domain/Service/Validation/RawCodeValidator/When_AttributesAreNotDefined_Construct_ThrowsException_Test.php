<?php

namespace Autocode\Domain\Service\Validation;

use PHPUnit\Framework\TestCase;

/**
 * Class When_AttributesAreNotDefined_Validate_ThrowsException
 *
 * R01005:
 * When attributes are not defined, ::validate method throws UndefinedAttributesValidationException.
 *
 * @package Autocode\Domain\Entity\Service\Validation
 * @coversDefaultClass \Autocode\Domain\Service\Validation\RawCodeValidator
 */
class When_AttributesAreNotDefined_Validate_ThrowsException_Test extends TestCase
{
    /**
     * @covers ::validate
     * @covers ::hasAttributesDefined
     * @dataProvider rawCodeProvider
     * @expectedException  \Autocode\Domain\Service\Validation\UndefinedAttributesValidationException
     */
    public function test(array $classFullQualifiedName)
    {
        $sut = new RawCodeValidator();
        $sut->validate($classFullQualifiedName);
    }

    public function rawCodeProvider()
    {
        return [
            [['attributes' => []]],
            [['attributes' => null]],
            [['foo' => null]],
        ];
    }
}
