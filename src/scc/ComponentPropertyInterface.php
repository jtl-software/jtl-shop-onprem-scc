<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc;

/**
 * Interface ComponentPropertyInterface
 *
 * @package scc
 */
interface ComponentPropertyInterface
{
    /**
     * @return bool
     */
    public function getIsRequired(): bool;

    /**
     * @return ComponentPropertyType
     */
    public function getType(): ComponentPropertyType;

    /**
     * @return mixed
     */
    public function getDefaultValue();

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @param mixed $value
     */
    public function setValue($value);

    /**
     * @return bool
     */
    public function hasValue(): bool;
}
