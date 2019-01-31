<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;
use scc\renderers\NestedBlockRenderer;

/**
 * Class Radio
 *
 * @package scc\components
 */
class Radio extends AbstractBlockComponent
{
    /**
     * Radio constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('radio.tpl');
        $this->setName('radio');

        $prop = new ComponentProperty();
        $prop->setName('disabled');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('checked');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('required');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $this->params[] = new ComponentProperty('value');
        $this->params[] = new ComponentProperty('button-variant');
        $this->params[] = new ComponentProperty('name');

        $this->setRenderer(new NestedBlockRenderer($this));
    }
}
