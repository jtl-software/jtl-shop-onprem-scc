<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class Breadcrumb
 *
 * @package scc\components
 */
class Breadcrumb extends AbstractBlockComponent
{
    /**
     * Breadcrumb constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $prop = new ComponentProperty();
        $prop->setName('tag');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('ol');
        $this->params[] = $prop;
    }

    /**
     * @inheritdoc
     */
    public function getTemplate(): string
    {
        return 'breadcrumb.tpl';
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'breadcrumb';
    }
}
