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
     * @param string $template
     */
    public function setTemplate(string $template): void;

    /**
     * @return array
     */
    public function getParams(): array;

    /**
     * @param array $params
     */
    public function setParams(array $params): void;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return ComponentType
     */
    public function getType(): ComponentType;

    /**
     * @param ComponentType $type
     */
    public function setType(ComponentType $type): void;

    /**
     * @return ComponentRendererInterface
     */
    public function getRenderer(): ComponentRendererInterface;

    /**
     * @param ComponentRendererInterface $renderer
     */
    public function setRenderer(ComponentRendererInterface $renderer): void;
}
