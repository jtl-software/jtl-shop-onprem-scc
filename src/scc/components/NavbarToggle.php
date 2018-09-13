<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class NavbarToggle
 *
 * @package scc\components
 */
class NavbarToggle extends AbstractBlockComponent
{
    /**
     * NavbarToggle constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $prop = new ComponentProperty();
        $prop->setName('label');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('Toggle navigation');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('target');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;
    }

    /**
     * @inheritdoc
     */
    public function getTemplate(): string
    {
        return 'navbartoggle.tpl';
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'navbartoggle';
    }
}
