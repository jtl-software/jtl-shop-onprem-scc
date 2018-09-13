<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class NavbarNav
 *
 * @package scc\components
 */
class NavbarNav extends AbstractBlockComponent
{
    /**
     * NavbarNav constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $prop = new ComponentProperty();
        $prop->setName('tag');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('ul');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('fill');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('justified');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
    }

    /**
     * @inheritdoc
     */
    public function getTemplate(): string
    {
        return 'navbarnav.tpl';
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'navbarnav';
    }
}
