<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class Tab
 *
 * @package scc\components
 */
class Tab extends AbstractBlockComponent
{
    /**
     * Tab constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('tab.tpl');
        $this->setName('tab');

        $this->params[] = new ComponentProperty('tag', 'li');
        $this->params[] = new ComponentProperty('title');
        $this->params[] = new ComponentProperty('title-item-class');
        $this->params[] = new ComponentProperty('title-link-class');
        $this->params[] = new ComponentProperty('href', '#');

        $prop = new ComponentProperty();
        $prop->setName('active');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('disabled');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
        
        $prop = new ComponentProperty();
        $prop->setName('swipeable');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
    }
}
