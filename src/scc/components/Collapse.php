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

        $prop = new ComponentProperty();
        $prop->setName('accordion');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('tag');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('div');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('visible');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('is-nav');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
    }

    /**
     * @inheritdoc
     */
    public function getTemplate(): string
    {
        return 'collapse.tpl';
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'collapse';
    }
}
