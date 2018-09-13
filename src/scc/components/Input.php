<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class Input
 *
 * @package scc\components
 */
class Input extends AbstractFunctionComponent
{
    /**
     * Input constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $prop = new ComponentProperty();
        $prop->setName('type');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('text');
        $prop->setIsRequired(true);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('value');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('size');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_INT));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('min');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_NUMERIC));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('max');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_NUMERIC));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('step');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_NUMERIC));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('placeholder');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('name');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('readonly');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('required');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('disabled');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('autocomplete');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;
    }

    /**
     * @inheritdoc
     */
    public function getTemplate(): string
    {
        return 'input.tpl';
    }

    /**
     * @inheritdoc
     */
    public function getName(): string
    {
        return 'input';
    }
}
