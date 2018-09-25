<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentInterface;
use scc\ComponentProperty;
use scc\ComponentPropertyInterface;
use scc\ComponentPropertyType;
use scc\ComponentRendererInterface;
use scc\ComponentType;
use scc\renderers\BlockRenderer;

/**
 * Class AbstractBlockComponent
 * @package scc\components
 */
abstract class AbstractBlockComponent implements ComponentInterface
{
    /**
     * @var string|null
     */
    protected $content;

    /**
     * @var ComponentPropertyInterface[]
     */
    protected $params;

    public function __construct()
    {
        $this->params = [];

        $prop = new ComponentProperty();
        $prop->setName('class');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('id');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('style');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;
        
        $prop = new ComponentProperty();
        $prop->setName('itemprop');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;
        
        $prop = new ComponentProperty();
        $prop->setName('itemscope');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $this->params[] = $prop;
        
        $prop = new ComponentProperty();
        $prop->setName('itemtype');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;
    }

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
    public function getRenderer(): ComponentRendererInterface
    {
        return new BlockRenderer($this);
    }

    /**
     * @return ComponentType
     */
    public function getType(): ComponentType
    {
        return new ComponentType(ComponentType::TYPE_BLOCK);
    }
}