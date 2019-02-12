<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class Collapse
 *
 * @package scc\components
 */
class Collapse extends AbstractBlockComponent
{
    /**
     * Collapse constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('collapse.tpl');
        $this->setName('collapse');

        $this->params[] = new ComponentProperty('accordion');
        $this->params[] = new ComponentProperty('tag', 'div');

        $prop = new ComponentProperty();
        $prop->setName('visible');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('is-nav');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
    }
}
