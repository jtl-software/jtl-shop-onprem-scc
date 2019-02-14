<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class Row
 * @package scc\components
 */
class Row extends AbstractBlockComponent
{
    /**
     * Row constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('row.tpl');
        $this->setName('row');

        $prop = new ComponentProperty();
        $prop->setName('no-gutters');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $this->params[] = new ComponentProperty('tag', 'div');
        $this->params[] = new ComponentProperty('align-h');
        $this->params[] = new ComponentProperty('align-v');
        $this->params[] = new ComponentProperty('align-content');
    }
}
