<?php

namespace Autocode\Domain\Entity\Code\AcClass;

class Provider
{
    public function validClassNameProvider()
    {
        return [
            ['ClassName'],
            ['\ClassName'],
            ['My\NameSpace\ClassName'],
            ['My\NameSpace\ClassName'],
            ['\My\NameSpace\ClassName'],
        ];
    }
}
