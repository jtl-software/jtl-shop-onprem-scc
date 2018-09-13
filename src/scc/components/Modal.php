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

        $prop = new ComponentProperty();
        $prop->setName('title');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('footer');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('centered');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
    }

    /**
     * @inheritdoc
     */
    public function getTemplate(): string
    {
        return 'modal.tpl';
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'modal';
    }
}
