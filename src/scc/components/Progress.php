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

        $prop = new ComponentProperty();
        $prop->setName('min');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_INT));
        $prop->setDefaultValue(0);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('max');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_INT));
        $prop->setDefaultValue(100);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('now');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_INT));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('striped');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('animated');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('height');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('type');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;
    }

    /**
     * @inheritdoc
     */
    public function getTemplate(): string
    {
        return 'progress.tpl';
    }

    /**
     * @inheritdoc
     */
    public function getName(): string
    {
        return 'progress';
    }
}
