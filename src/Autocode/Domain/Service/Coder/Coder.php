<?php declare(strict_types=1);

namespace Autocode\Domain\Service\Coder;

use Autocode\Domain\Entity\Code\AcClass;
use Autocode\Domain\Entity\Lang\Commons\ClosePhpFile;
use Autocode\Domain\Entity\Lang\Commons\OpenPhpFile;
use Autocode\Domain\Entity\Lang\Php70\AttributeDeclaration;
use Autocode\Domain\Entity\Lang\Php70\ClassDeclaration;
use Autocode\Domain\Entity\Lang\Php70\GetterDeclaration;
use Autocode\Domain\Entity\Lang\Php70\SetterDeclaration;

/**
 * Class Coder
 *
 * Transforms an AcClass object in PHP 7.0
 *
 * @package Autocode\Domain\Entity\Lang\Php70
 */
class Coder implements ICoder
{
    /**
     * @var string
     */
    private $code = null;

    public function init(AcClass $class): ICoder
    {
        $this->code = '';
        $this->code .= new OpenPhpFile();
        $this->code .= new ClassDeclaration($class);
        $this->code .= new AttributeDeclaration($class);

        if ($class->hasGetters()) {
            $this->code .= new GetterDeclaration($class);
        }

        if ($class->hasSetters()) {
            $this->code .= new SetterDeclaration($class);
        }

        $this->code .= new ClosePhpFile();

        return $this;
    }

    public function getCode(): string
    {
        return $this->code;
    }
}
