<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class ButtonGroup
 * @package scc\components
 */
class ButtonGroup extends AbstractBlockComponent
{
    /**
     * ButtonGroup constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('buttongroup.tpl');
        $this->setName('buttongroup');

        $this->params[] = new ComponentProperty('tag', 'div');
        $this->params[] = new ComponentProperty('size');

        $prop = new ComponentProperty();
        $prop->setName('vertical');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
    }
}
