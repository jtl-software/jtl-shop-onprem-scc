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
        $this->setTemplate('navbartoggle.tpl');
        $this->setName('navbartoggle');

        $this->params[] = new ComponentProperty('label', 'Toggle navigation');
    }
}
