<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class ButtonToolbar
 * @package scc\components
 */
class ButtonToolbar extends AbstractBlockComponent
{

    /**
     * ButtonToolbar constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('buttontoolbar.tpl');
        $this->setName('buttontoolbar');

        $prop = new ComponentProperty();
        $prop->setName('justify');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('key-nav');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
    }
}
