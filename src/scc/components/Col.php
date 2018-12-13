<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class Col
 *
 * @package scc\components
 */
class Col extends AbstractBlockComponent
{
    /**
     * Col constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('col.tpl');
        $this->setName('col');

        $prop = new ComponentProperty();
        $prop->setName('col');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $this->params[] = new ComponentProperty('tag', 'div');

        $prop = new ComponentProperty();
        $prop->setName('cols');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_INT));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('offset');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_INT));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('order');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_INT));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('sm');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('md');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('lg');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('xl');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $this->params[] = new ComponentProperty('offset-sm');
        $this->params[] = new ComponentProperty('offset-md');
        $this->params[] = new ComponentProperty('offset-lg');
        $this->params[] = new ComponentProperty('offset-xl');
        $this->params[] = new ComponentProperty('order-sm');
        $this->params[] = new ComponentProperty('order-md');
        $this->params[] = new ComponentProperty('order-lg');
        $this->params[] = new ComponentProperty('order-xl');
        $this->params[] = new ComponentProperty('align-self');
    }
}
