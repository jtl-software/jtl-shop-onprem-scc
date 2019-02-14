<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class DropDownItem
 * @package scc\components
 */
class DropDownItem extends AbstractBlockComponent
{
    /**
     * DropDownItem constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('dropdownitem.tpl');
        $this->setName('dropdownitem');

        $this->params[] = new ComponentProperty('target', '_self');
        $this->params[] = new ComponentProperty('variant');
        $this->params[] = new ComponentProperty('href');
        $this->params[] = new ComponentProperty('rel');
        $this->params[] = new ComponentProperty('activeClass', 'active');
        $this->params[] = new ComponentProperty('tag', 'a');

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
    }
}
