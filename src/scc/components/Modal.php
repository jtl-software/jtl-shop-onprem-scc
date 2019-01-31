<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class Modal
 *
 * @package scc\components
 */
class Modal extends AbstractBlockComponent
{
    /**
     * Modal constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('modal.tpl');
        $this->setName('modal');

        $this->params[] = new ComponentProperty('title');
        $this->params[] = new ComponentProperty('footer');

        $prop = new ComponentProperty();
        $prop->setName('centered');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
    }
}
