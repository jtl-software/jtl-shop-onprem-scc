<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class Container
 * @package scc\components
 */
class Container extends AbstractBlockComponent
{
    /**
     * Container constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('container.tpl');
        $this->setName('container');

        $prop = new ComponentProperty();
        $prop->setName('fluid');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
        $this->params[] = new ComponentProperty('tag', 'div');
    }
}
