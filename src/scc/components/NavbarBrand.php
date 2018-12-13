<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class NavbarBrand
 *
 * @package scc\components
 */
class NavbarBrand extends AbstractBlockComponent
{
    /**
     * NavbarBrand constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('navbarbrand.tpl');
        $this->setName('navbarbrand');

        $this->params[] = new ComponentProperty('tag', 'div');
        $this->params[] = new ComponentProperty('href');
        $this->params[] = new ComponentProperty('rel');
        $this->params[] = new ComponentProperty('target', '_self');
        $this->params[] = new ComponentProperty('active-class', 'active');
        $this->params[] = new ComponentProperty('exact-active-class', 'active');
        $this->params[] = new ComponentProperty('router-tag', 'a');

        $prop = new ComponentProperty();
        $prop->setName('active');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('disabled');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('append');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('exact');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('replace');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
    }
}
