<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class CheckboxGroup
 * @package scc\components
 */
class CheckboxGroup extends AbstractBlockComponent
{
    /**
     * CheckboxGroup constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('checkboxgroup.tpl');
        $this->setName('checkboxgroup');

        $prop = new ComponentProperty();
        $prop->setName('disabled');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('required');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $this->params[] = new ComponentProperty('name');
        $this->params[] = new ComponentProperty('size');
        $this->params[] = new ComponentProperty('value-field', 'value');
        $this->params[] = new ComponentProperty('text-field', 'text');
        $this->params[] = new ComponentProperty('disabled-field', 'disabled');

        $prop = new ComponentProperty();
        $prop->setName('plain');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('validated');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('stacked');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('buttons');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $this->params[] = new ComponentProperty('button-variant', 'secondary');
    }
}
