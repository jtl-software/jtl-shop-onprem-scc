<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;
use scc\ComponentRendererInterface;
use scc\ComponentType;
use scc\renderers\FunctionRenderer;

/**
 * Class AbstractBlockComponent
 * @package scc\components
 */
abstract class AbstractFunctionComponent extends AbstractBaseComponent
{
    /**
     * AbstractFunctionComponent constructor.
     */
    public function __construct()
    {
        $this->params = [];

        $this->params[] = new ComponentProperty('class');
        $this->params[] = new ComponentProperty('id');
        $this->params[] = new ComponentProperty('style');
        $this->params[] = new ComponentProperty('itemprop');
        $this->params[] = new ComponentProperty('itemtype');
        $this->params[] = new ComponentProperty('itemid');
        $this->params[] = new ComponentProperty('role');

        $prop = new ComponentProperty();
        $prop->setName('itemscope');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('aria');
        $prop->setType(ComponentPropertyType::TYPE_ARRAY);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('data');
        $prop->setType(ComponentPropertyType::TYPE_ARRAY);
        $this->params[] = $prop;

        $this->setRenderer(new FunctionRenderer($this));
        $this->setType(new ComponentType(ComponentType::TYPE_FUNCTION));
    }
}
