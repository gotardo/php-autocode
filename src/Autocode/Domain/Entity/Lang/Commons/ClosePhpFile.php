<?php

namespace Autocode\Domain\Entity\Lang\Commons;

use Autocode\Domain\Service\Coder\ICodeFragment;

class ClosePhpFile implements ICodeFragment
{
    public function __toString(): string
    {
        return "\n}\n\n";
    }
}
