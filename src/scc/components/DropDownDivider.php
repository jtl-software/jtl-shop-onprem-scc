<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentInterface;
use scc\ComponentProperty;
use scc\ComponentPropertyInterface;
use scc\ComponentRendererInterface;
use scc\ComponentPropertyType;
use scc\ComponentType;
use scc\renderers\FunctionRenderer;

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

        $prop = new ComponentProperty();
        $prop->setName('tag');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('div');
        $this->params[] = $prop;
    }

    /**
     * @inheritdoc
     */
    public function getTemplate(): string
    {
        return 'dropdowndivider.tpl';
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'dropdowndivider';
    }
}
