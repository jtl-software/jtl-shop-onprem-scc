<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class Form
 *
 * @package scc\components
 */
class Form extends AbstractBlockComponent
{
    /**
     * Form constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('form.tpl');
        $this->setName('form');

        $prop = new ComponentProperty();
        $prop->setName('inline');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('novalidate');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('validated');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('addtoken');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(true);
        $this->params[] = $prop;

        $this->params[] = new ComponentProperty('action', '');
        $this->params[] = new ComponentProperty('method', 'POST');
        $this->params[] = new ComponentProperty('target', '_self');
        $this->params[] = new ComponentProperty('enctype');
    }
}
