<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class FormGroup
 * @package scc\components
 */
class FormGroup extends AbstractBlockComponent
{
    /**
     * FormGroup constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('formgroup.tpl');
        $this->setName('formgroup');

        $prop = new ComponentProperty();
        $prop->setName('label-cols');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_INT));
        $prop->setDefaultValue(3);
        $this->params[] = $prop;

        $this->params[] = new ComponentProperty('breakpoint', 'sm');
        $this->params[] = new ComponentProperty('label-text-align');
        $this->params[] = new ComponentProperty('label');
        $this->params[] = new ComponentProperty('label-for');
        $this->params[] = new ComponentProperty('label-size');
        $this->params[] = new ComponentProperty('label-class');
        $this->params[] = new ComponentProperty('description');

        $prop = new ComponentProperty();
        $prop->setName('label-sr-only');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('horizontal');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
    }
}
