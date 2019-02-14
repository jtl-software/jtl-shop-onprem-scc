<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentInterface;
use scc\ComponentProperty;
use scc\ComponentPropertyInterface;
use scc\ComponentRendererInterface;
use scc\ComponentType;

/**
 * Class AbstractBaseComponent
 * @package scc\components
 */
abstract class AbstractBaseComponent implements ComponentInterface
{
    /**
     * @var string|null
     */
    protected $content;

    /**
     * @var ComponentPropertyInterface[]
     */
    protected $params;

    /**
     * @var string
     */
    protected $template;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var ComponentRendererInterface
     */
    protected $renderer;

    /**
     * @var ComponentType
     */
    protected $type;

    /**
     * @inheritdoc
     */
    public function getParams(): array
    {
        return $this->params;
    }

    /**
     * @inheritdoc
     */
    public function setParams(array $params): void
    {
        $this->params = $params;
    }

    /**
     * @inheritdoc
     */
    public function addParam(ComponentProperty $param): void
    {
        $this->params[] = $param;
    }

    /**
     * @inheritdoc
     */
    public function getTemplate(): string
    {
        return $this->template;
    }

    /**
     * @inheritdoc
     */
    public function setTemplate(string $template): void
    {
        $this->template = $template;
    }

    /**
     * @inheritdoc
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @inheritdoc
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @inheritdoc
     */
    public function getRenderer(): ComponentRendererInterface
    {
        return $this->renderer;
    }

    /**
     * @inheritdoc
     */
    public function setRenderer(ComponentRendererInterface $renderer): void
    {
        $this->renderer = $renderer;
    }

    /**
     * @inheritdoc
     */
    public function getType(): ComponentType
    {
        return $this->type;
    }

    /**
     * @inheritdoc
     */
    public function setType(ComponentType $type): void
    {
        $this->type = $type;
    }
}
