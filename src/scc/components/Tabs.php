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
        $this->setName('tabs');

        $this->params[] = new ComponentProperty('tag', 'ul');

        $prop = new ComponentProperty();
        $prop->setName('card');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('small');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('pills');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $this->params[] = new ComponentProperty('nav-class');
        $this->params[] = new ComponentProperty('content-class');

        $prop = new ComponentProperty();
        $prop->setName('tabs');
        $prop->setType(ComponentPropertyType::TYPE_ARRAY);
        $this->params[] = $prop;
        
        $prop = new ComponentProperty();
        $prop->setName('swipeable');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $this->setRenderer(new TabsRenderer($this));
    }
}
