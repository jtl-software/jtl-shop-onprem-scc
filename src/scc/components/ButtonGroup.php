<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentInterface;
use scc\ComponentProperty;
use scc\ComponentPropertyInterface;
use scc\ComponentRendererInterface;
use scc\ComponentPropertyType;
use scc\ComponentType;
use scc\renderers\BlockRenderer;

/**
 * Class ButtonGroup
 * @package scc\components
 */
class ButtonGroup extends AbstractBlockComponent
{
    /**
     * ButtonGroup constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $prop = new ComponentProperty();
        $prop->setName('tag');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('div');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('size');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('vertical');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
    }

    /**
     * @inheritdoc
     */
    public function getTemplate(): string
    {
        return 'buttongroup.tpl';
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'buttongroup';
    }
}
