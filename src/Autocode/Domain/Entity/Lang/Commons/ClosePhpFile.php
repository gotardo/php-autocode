<?php

namespace Autocode\Domain\Entity\Lang\Commons;

class ClosePhpFile
{
    public function __toString(): string
    {
        return "\n}\n\n";
    }
}
