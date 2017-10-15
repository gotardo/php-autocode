<?php

namespace Autocode\Domain\Service\Coder;

use Autocode\Domain\Entity\Code\AcClass;

/**
 * Interface ICoder
 * @package Autocode\Domain\Entity\Lang
 */
interface ICoder
{
    /**
     * Returns the already built code.
     * @param AcClass $classCode
     * @return string
     */
    public function getCode(): string;

    /**
     * Initializes the code builder.
     *
     * @param AcClass $class
     * @return ICoder
     */
    public function init(AcClass $class): ICoder;
}
