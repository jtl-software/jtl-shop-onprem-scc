<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class Button
 * @package scc\components
 */
class Button extends AbstractBlockComponent
{
    /**
     * Button constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('button.tpl');
        $this->setName('button');

        $this->params[] = new ComponentProperty('type', 'button');
        $this->params[] = new ComponentProperty('href');
        $this->params[] = new ComponentProperty('rel');
        $this->params[] = new ComponentProperty('target');
        $this->params[] = new ComponentProperty('name');
        $this->params[] = new ComponentProperty('value');
        $this->params[] = new ComponentProperty('size');
        $this->params[] = new ComponentProperty('title');
        $this->params[] = new ComponentProperty('variant', 'secondary');

        $prop = new ComponentProperty();
        $prop->setName('disabled');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('block');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('formnovalidate');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
    }
}
