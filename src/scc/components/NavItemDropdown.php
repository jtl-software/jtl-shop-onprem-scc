<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class NavItemDropdown
 * @package scc\components
 */
class NavItemDropdown extends AbstractBlockComponent
{
    /**
     * NavItemDropdown constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('navitemdropdown.tpl');
        $this->setName('navitemdropdown');

        $this->params[] = new ComponentProperty('text');
        $this->params[] = new ComponentProperty('tag', 'li');
        $this->params[] = new ComponentProperty('extra-toggle-classes');
        $this->params[] = new ComponentProperty('extra-menu-classes');

        $prop = new ComponentProperty();
        $prop->setName('offset');
        $prop->setType(ComponentPropertyType::TYPE_INT);
        $prop->setDefaultValue(0);
        $this->params[] = $prop;
        
        $prop = new ComponentProperty();
        $prop->setName('router-data');
        $prop->setType(ComponentPropertyType::TYPE_ARRAY);
        $this->params[] = $prop;
        
        $prop = new ComponentProperty();
        $prop->setName('router-aria');
        $prop->setType(ComponentPropertyType::TYPE_ARRAY);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('dropup');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('disabled');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('right');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('no-flip');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('no-caret');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
    }
}
