<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class Select
 *
 * @package scc\components
 */
class Select extends AbstractBlockComponent
{
    /**
     * Select constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('select.tpl');
        $this->setName('select');

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

        $prop = new ComponentProperty();
        $prop->setName('plain');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('multiple');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $this->params[] = new ComponentProperty('size');
        $this->params[] = new ComponentProperty('autocomplete');
        $this->params[] = new ComponentProperty('title');
        $this->params[] = new ComponentProperty('name');

        $prop = new ComponentProperty();
        $prop->setName('select-size');
        $prop->setType(ComponentPropertyType::TYPE_INT);
        $prop->setDefaultValue(0);
        $this->params[] = $prop;
    }
}
