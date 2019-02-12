<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class Progress
 * @package scc\components
 */
class Progress extends AbstractFunctionComponent
{
    /**
     * Progress constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('progress.tpl');
        $this->setName('progress');

        $prop = new ComponentProperty();
        $prop->setName('min');
        $prop->setType(ComponentPropertyType::TYPE_INT);
        $prop->setDefaultValue(0);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('max');
        $prop->setType(ComponentPropertyType::TYPE_INT);
        $prop->setDefaultValue(100);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('now');
        $prop->setType(ComponentPropertyType::TYPE_INT);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('striped');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('animated');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $this->params[] = new ComponentProperty('height');
        $this->params[] = new ComponentProperty('type');
        $this->params[] = new ComponentProperty('title');
    }
}
