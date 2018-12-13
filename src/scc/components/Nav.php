<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class Nav
 *
 * @package scc\components
 */
class Nav extends AbstractBlockComponent
{
    /**
     * Nav constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('nav.tpl');
        $this->setName('nav');

        $this->params[] = new ComponentProperty('tag', 'ul');

        $prop = new ComponentProperty();
        $prop->setName('fill');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('justified');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('tabs');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('pills');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('vertical');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('is-nav-bar');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
    }
}
