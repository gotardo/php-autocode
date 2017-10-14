<?php declare(strict_types=1);

namespace Autocode\Domain\Entity\Code;

class AcClassBuilder
{
    /**
     * @const NAMESPACE_DELIMITER Char for namespace delimitation.
     */
    const NAMESPACE_DELIMITER = '\\';

    /**
     * @var AcClass
     */
    private $acClass;

    public function __construct()
    {
        $this->acClass = new AcClass();
    }

    /**
     * Inits the class building.
     *
     * @return AcClassBuilder a new AcClassBuilder
     */
    public static function init()
    {
        return new self;
    }

    /**
     * Set the definition object.
     *
     * @param array $definition
     * @return AcClassBuilder
     */
    public function setDefinition(array $definition = []) : AcClassBuilder
    {
        $this->acClass->setDefinition($definition);
        return $this;
    }

    /**
     * Sets the class fully qualified name.
     *
     * @param string $classFullyQualifiedName
     * @return AcClassBuilder
     */
    public function setFullyQualifiedName(string  $classFullyQualifiedName) : AcClassBuilder
    {
        $spaces = explode(self::NAMESPACE_DELIMITER, trim($classFullyQualifiedName, self::NAMESPACE_DELIMITER));
        $this->acClass->setClassName(array_pop($spaces));
        $this->acClass->setNamespace(self::NAMESPACE_DELIMITER . join(self::NAMESPACE_DELIMITER, $spaces));
        return $this;
    }

    /**
     * @return AcClass
     */
    public function get(): AcClass
    {
        return $this->acClass;
    }
}
