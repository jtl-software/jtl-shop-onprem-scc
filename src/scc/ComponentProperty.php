<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc;

/**
 * Class ComponentProperty
 *
 * @package scc
 */
class ComponentProperty implements ComponentPropertyInterface
{
    /**
     * @var mixed
     */
    private $defaultValue;

    /**
     * @var bool
     */
    private $isRequired = false;

    /**
     * @var ComponentPropertyType
     */
    private $type;

    /**
     * @var string
     */
    private $name;

    /**
     * @var mixed
     */
    private $value;

    /**
     * @return mixed
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * @param mixed $value
     */
    public function setDefaultValue($value): void
    {
        $this->defaultValue = $value;
    }

    /**
     * @return bool
     */
    public function getIsRequired(): bool
    {
        return $this->isRequired;
    }

    /**
     * @param bool $required
     */
    public function setIsRequired(bool $required): void
    {
        $this->isRequired = $required;
    }

    /**
     * @return ComponentPropertyType
     */
    public function getType(): ComponentPropertyType
    {
        return $this->type;
    }

    /**
     * @param ComponentPropertyType $type
     */
    public function setType(ComponentPropertyType $type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    /**
     * @return bool
     */
    public function hasValue(): bool
    {
        return $this->value !== null;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->value !== null ? (string)$this->value : '';
    }
}
