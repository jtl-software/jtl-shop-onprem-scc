<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class Link
 * @package scc\components
 */
class Link extends AbstractBlockComponent
{
    /**
     * Link constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('link.tpl');

        $prop = new ComponentProperty();
        $prop->setName('title');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('rel');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('href');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('#');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('target');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('name');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setIsRequired(true);
        $this->params[] = $prop;
    }

    /**
     * @inheritdoc
     */
    public function getName(): string
    {
        return 'link';
    }
}
