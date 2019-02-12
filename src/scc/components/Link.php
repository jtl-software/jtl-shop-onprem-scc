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
        $this->setName('link');

        $this->params[] = new ComponentProperty('title');
        $this->params[] = new ComponentProperty('rel');
        $this->params[] = new ComponentProperty('target');
        $this->params[] = new ComponentProperty('href', '#');

        $prop = new ComponentProperty();
        $prop->setName('name');
        $prop->setType(ComponentPropertyType::TYPE_STRING);
        $prop->setIsRequired(true);
        $this->params[] = $prop;
    }
}
