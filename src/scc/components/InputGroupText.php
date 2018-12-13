<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class InputGroupText
 * @package scc\components
 */
class InputGroupText extends AbstractBlockComponent
{
    /**
     * InputGroupText constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('inputgrouptext.tpl');

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
        return 'inputgrouptext';
    }
}
