<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class Input
 * @package scc\components
 */
class Input extends AbstractFunctionComponent
{
    /**
     * Input constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('input.tpl');
        $this->setName('input');

        $prop = new ComponentProperty();
        $prop->setName('type');
        $prop->setType(ComponentPropertyType::TYPE_STRING);
        $prop->setDefaultValue('text');
        $prop->setIsRequired(true);
        $this->params[] = $prop;

        $this->params[] = new ComponentProperty('value');

        $prop = new ComponentProperty();
        $prop->setName('size');
        $prop->setType(ComponentPropertyType::TYPE_INT);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('min');
        $prop->setType(ComponentPropertyType::TYPE_NUMERIC);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('max');
        $prop->setType(ComponentPropertyType::TYPE_NUMERIC);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('size');
        $prop->setType(ComponentPropertyType::TYPE_NUMERIC);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('maxlength');
        $prop->setType(ComponentPropertyType::TYPE_NUMERIC);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('step');
        $prop->setType(ComponentPropertyType::TYPE_NUMERIC);
        $this->params[] = $prop;

        $this->params[] = new ComponentProperty('placeholder');
        $this->params[] = new ComponentProperty('name');
        $this->params[] = new ComponentProperty('autocomplete');

        $prop = new ComponentProperty();
        $prop->setName('readonly');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('required');
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
