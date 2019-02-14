<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc;

/**
 * Interface ComponentInterface
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
     * @return ComponentProperty[]
     */
    public function getParams(): array;

    /**
     * @param ComponentProperty[] $params
     */
    public function setParams(array $params): void;

    /**
     * @param ComponentProperty $param
     */
    public function addParam(ComponentProperty $param): void;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     */
    public function setName(string $name): void;

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
