<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class ListGroupItem
 * @package scc\components
 */
class ListGroupItem extends AbstractBlockComponent
{
    /**
     * ListGroupItem constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('listgroupitem.tpl');
        $this->setName('listgroupitem');

        $this->params[] = new ComponentProperty('tag', 'div');
        $this->params[] = new ComponentProperty('variant');
        $this->params[] = new ComponentProperty('href');

        $prop = new ComponentProperty();
        $prop->setName('active');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('disabled');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
    }
}
