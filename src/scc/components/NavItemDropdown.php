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
 *
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

        $prop = new ComponentProperty();
        $prop->setName('text');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('tag');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_INT));
        $prop->setDefaultValue('li');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('offset');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_INT));
        $prop->setDefaultValue(0);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('extra-toggle-classes');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;
        
        $prop = new ComponentProperty();
        $prop->setName('router-data');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_ARRAY));
        $this->params[] = $prop;
        
        $prop = new ComponentProperty();
        $prop->setName('router-aria');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_ARRAY));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('extra-menu-classes');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('dropup');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('disabled');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('right');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('no-flip');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('no-caret');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'navitemdropdown';
    }
}
