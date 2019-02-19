<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class Table
 * @package scc\components
 */
class Table extends AbstractFunctionComponent
{
    /**
     * Table constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('table.tpl');
        $this->setName('table');

        $this->params[] = new ComponentProperty('title');
        $this->params[] = new ComponentProperty('title-item-class');
        $this->params[] = new ComponentProperty('title-link-class');
        $this->params[] = new ComponentProperty('href', '#');

        $prop = new ComponentProperty();
        $prop->setName('caption');
        $prop->setType(ComponentPropertyType::TYPE_STRING);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('responsive');
        $prop->setType(ComponentPropertyType::TYPE_STRING);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('fields');
        $prop->setType(ComponentPropertyType::TYPE_ARRAY);
        $prop->setDefaultValue([]);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('items');
        $prop->setType(ComponentPropertyType::TYPE_ARRAY);
        $prop->setDefaultValue([]);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('striped');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('bordered');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
        
        $prop = new ComponentProperty();
        $prop->setName('borderless');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('outlined');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('small');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('hover');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('fixed');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('dark');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
    }
}
