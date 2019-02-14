<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class Navbar
 * @package scc\components
 */
class Navbar extends AbstractBlockComponent
{
    /**
     * Navbar constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('navbar.tpl');
        $this->setName('navbar');

        $this->params[] = new ComponentProperty('tag', 'nav');
        $this->params[] = new ComponentProperty('type', 'light');
        $this->params[] = new ComponentProperty('variant');
        $this->params[] = new ComponentProperty('toggle-breakpoint');
        $this->params[] = new ComponentProperty('fixed');

        $prop = new ComponentProperty();
        $prop->setName('toggleable');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('sticky');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
    }
}
