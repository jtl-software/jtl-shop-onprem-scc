<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class Textarea
 *
 * @package scc\components
 */
class Textarea extends AbstractBlockComponent
{
    /**
     * Textarea constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('textarea.tpl');
        $this->setName('textarea');

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
        $prop->setName('readonly');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('plaintext');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('no-resize');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $this->params[] = new ComponentProperty('size');
        $this->params[] = new ComponentProperty('value');
        $this->params[] = new ComponentProperty('autocomplete');
        $this->params[] = new ComponentProperty('placeholder');
        $this->params[] = new ComponentProperty('name');
        $this->params[] = new ComponentProperty('wrap', 'soft');

        $prop = new ComponentProperty();
        $prop->setName('rows');
        $prop->setType(ComponentPropertyType::TYPE_INT);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('max-rows');
        $prop->setType(ComponentPropertyType::TYPE_INT);
        $this->params[] = $prop;
    }
}
