<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;
use scc\ComponentType;
use scc\renderers\BlockRenderer;

/**
 * Class AbstractBlockComponent
 * @package scc\components
 */
abstract class AbstractBlockComponent extends AbstractBaseComponent
{
    /**
     * AbstractBlockComponent constructor.
     */
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

        $prop = new ComponentProperty();
        $prop->setName('itemid');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('role');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('aria');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_ARRAY));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('data');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_ARRAY));
        $this->params[] = $prop;

        $this->setType(new ComponentType(ComponentType::TYPE_BLOCK));
        $this->setRenderer(new BlockRenderer($this));
    }
}
