<?php

namespace Autocode\Domain\Service\Validation;

class RawCodeValidator
{
    /**
     * @param array $rawCode
     * @return array $rawCode
     * @throws UndefinedAttributesValidationException
     */
    public function validate(array $rawCode): array
    {
        if (!$this->hasAttributesDefined($rawCode)) {
            throw new UndefinedAttributesValidationException('class has no defined attributes');
        }
        return $rawCode;
    }

    public function hasAttributesDefined(array $rawCode): bool
    {
        return isset($rawCode['attributes']) && !empty($rawCode['attributes']);
    }
}
