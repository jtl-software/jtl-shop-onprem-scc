<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class CardImg
 * @package scc\components
 */
class CardImg extends AbstractFunctionComponent
{
    /**
     * CardImg constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('cardimg.tpl');
        $this->setName('cardimg');

        $this->params[] = new ComponentProperty('src');
        $this->params[] = new ComponentProperty('alt', '');

        $prop = new ComponentProperty();
        $prop->setName('top');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('bottom');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('fluid');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
    }
}
