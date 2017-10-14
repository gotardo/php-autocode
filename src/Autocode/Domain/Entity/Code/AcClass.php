<?php declare(strict_types=1);

namespace Autocode\Domain\Entity\Code;

class AcClass
{
    private $className;
    private $definition;
    private $namespace;

    /**
     * Returns the class attributes.
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->definition['attributes'];
    }

    /**
     * Returns the name of the Class
     * @return string
     */
    public function getClassName() : string
    {
        return $this->className;
    }

    /**
     * Returns the name of the Class
     * @return string
     */
    public function getNamespace() : string
    {
        return $this->namespace;
    }

    /**
     * Returns true if the class has getters activated.
     * Please, note that this methor will default to true if 'get' is not defined in the object.
     *
     * @return bool
     */
    public function hasGetters(): bool
    {
        return $this->hasMethod('get');
    }

    /**
     * Returns true if methods of type $methodTypeName are active in the object.
     * Please, note that this methor will default to true if $methodTypeName is not defined in the object.
     *
     * @param string $methodTypeName
     * @return bool
     */
    private function hasMethod(string $methodTypeName): bool
    {
        if (isset($this->definition['methods'][$methodTypeName])) {
            return (bool) $this->definition['methods'][$methodTypeName];
        }

        return true;
    }

    /**
     * Returns true if the class has setters activated.
     * Please, note that this methor will default to true if 'set' is not defined in the object.
     *
     * @return bool
     */
    public function hasSetters(): bool
    {
        return $this->hasMethod('set');
    }

    /**
     * @param string $className
     * @return AcClass
     */
    public function setClassName(string $className): AcClass
    {
        $this->className = $className;
        return $this;
    }

    /**
     * @param array $definition
     * @return AcClass
     */
    public function setDefinition(array $definition): AcClass
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * @param string $namespace
     * @return AcClass
     */
    public function setNamespace(string $namespace): AcClass
    {
        $this->namespace = $namespace;
        return $this;
    }
}
