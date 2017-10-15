<?php

namespace Autocode\Domain\Service\Coder;

interface ICodeFragment
{
    /**
     * @return string
     */
    public function __toString(): string;
}
