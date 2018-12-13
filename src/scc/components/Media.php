<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class Media
 *
 * @package scc\components
 */
class Media extends AbstractBlockComponent
{
    /**
     * Media constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('media.tpl');
        $this->setName('media');

        $this->params[] = new ComponentProperty('tag', 'div');
        $this->params[] = new ComponentProperty('vertical-align', 'top');

        $prop = new ComponentProperty();
        $prop->setName('right-align');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('no-body');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
    }
}
