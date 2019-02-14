<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class NavItem
 * @package scc\components
 */
class NavItem extends AbstractBlockComponent
{
    /**
     * NavItem constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('navitem.tpl');
        $this->setName('navitem');

        $this->params[] = new ComponentProperty('href');
        $this->params[] = new ComponentProperty('title');
        $this->params[] = new ComponentProperty('tag', 'li');
        $this->params[] = new ComponentProperty('target', '_self');
        $this->params[] = new ComponentProperty('active-class', 'active');
        $this->params[] = new ComponentProperty('router-tag', 'a');
        $this->params[] = new ComponentProperty('exact-active-class', 'active');
        $this->params[] = new ComponentProperty('router-class');

        $prop = new ComponentProperty();
        $prop->setName('router-data');
        $prop->setType(ComponentPropertyType::TYPE_ARRAY);
        $this->params[] = $prop;
        
        $prop = new ComponentProperty();
        $prop->setName('router-aria');
        $prop->setType(ComponentPropertyType::TYPE_ARRAY);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('active');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('disabled');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('append');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('exact');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('replace');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('nofollow');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
    }
}
