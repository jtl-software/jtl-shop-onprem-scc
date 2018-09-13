<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc;

/**
 * Interface ComponentInterface
 *
 * @package scc
 */
interface ComponentInterface
{
    /**
     * @return string
     */
    public function getTemplate(): string;

    /**
     * @return array
     */
    public function getParams(): array;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return ComponentType
     */
    public function getType(): ComponentType;

    /**
     * @return ComponentRendererInterface
     */
    public function getRenderer(): ComponentRendererInterface;
}
