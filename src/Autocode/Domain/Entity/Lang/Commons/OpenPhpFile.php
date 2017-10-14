<?php

namespace Autocode\Domain\Entity\Lang\Commons;

use Autocode\Domain\Entity\Lang\ICodeFragment;

class OpenPhpFile implements ICodeFragment
{
    public function __toString(): string
    {
        return "<?php\n";
    }
}
