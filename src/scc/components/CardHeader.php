<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class CardHeader
 * @package scc\components
 */
class CardHeader extends AbstractBlockComponent
{
    /**
     * CardHeader constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('cardheader.tpl');
        $this->setName('cardheader');

        $this->params[] = new ComponentProperty('header');
        $this->params[] = new ComponentProperty('header-tag', 'div');
        $this->params[] = new ComponentProperty('header-bg-variant');
        $this->params[] = new ComponentProperty('header-border-variant');
        $this->params[] = new ComponentProperty('header-text-variant');
        $this->params[] = new ComponentProperty('header-class');
    }
}
