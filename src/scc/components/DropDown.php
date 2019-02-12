<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class DropDown
 * @package scc\components
 */
class DropDown extends AbstractBlockComponent
{
    /**
     * DropDown constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('dropdown.tpl');
        $this->setName('dropdown');

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
        $prop->setName('split');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('dropup');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('offset');
        $prop->setType(ComponentPropertyType::TYPE_NUMERIC);
        $prop->setDefaultValue(0);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('noCaret');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('noFlip');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $this->params[] = new ComponentProperty('variant', 'secondary');
        $this->params[] = new ComponentProperty('toggleText', 'Toggle dropdown');
        $this->params[] = new ComponentProperty('size');
        $this->params[] = new ComponentProperty('text', '');
    }
}
