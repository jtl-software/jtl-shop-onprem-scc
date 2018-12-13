<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class DropDownDivider
 *
 * @package scc\components
 */
class DropDownDivider extends AbstractFunctionComponent
{
    /**
     * DropDownDivider constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('dropdowndivider.tpl');

        $prop = new ComponentProperty();
        $prop->setName('tag');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('div');
        $this->params[] = $prop;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'dropdowndivider';
    }
}
