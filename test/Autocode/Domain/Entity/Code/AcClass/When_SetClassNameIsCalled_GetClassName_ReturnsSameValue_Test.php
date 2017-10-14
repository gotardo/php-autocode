<?php

namespace Autocode\Domain\Entity\Code;

use PHPUnit\Framework\TestCase;

/**
 * Class When_SetClassNameIsCalled_GetClassName_ReturnsSameValue_Test
 *
 * @package Autocode\Domain\Entity\Code
 * @coversDefaultClass \Autocode\Domain\Entity\Code\AcClass
 */
class When_SetClassNameIsCalled_GetClassName_ReturnsSameValue_Test extends TestCase
{
    /**
     * @covers ::getClassName
     * @covers ::setClassName
     */
    public function test()
    {
        $className = 'MyClass';
        $acClass = new AcClass();

        $acClass->setClassName($className);

        $this->assertEquals($className, $acClass->getClassName());
    }
}
