<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;
use scc\ComponentRendererInterface;
use scc\renderers\TabsRenderer;

/**
 * Class Tabs
 *
 * @package scc\components
 */
class Tabs extends AbstractBlockComponent
{
    /**
     * Tabs constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('tabs.tpl');

        $prop = new ComponentProperty();
        $prop->setName('tag');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('ul');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('card');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('small');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('pills');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('nav-class');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('tabs');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_ARRAY));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('content-class');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;
        
        $prop = new ComponentProperty();
        $prop->setName('swipeable');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $this->setRenderer(new TabsRenderer($this));
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'tabs';
    }
}
