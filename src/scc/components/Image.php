<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class Image
 * @package scc\components
 */
class Image extends AbstractFunctionComponent
{
    /**
     * Image constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('image.tpl');
        $this->setName('image');

        $this->params[] = new ComponentProperty('src');
        $this->params[] = new ComponentProperty('srcset');
        $this->params[] = new ComponentProperty('sizes');
        $this->params[] = new ComponentProperty('alt', '');

        $prop = new ComponentProperty();
        $prop->setName('width');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_NUMERIC));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('height');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_NUMERIC));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('block');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('fluid');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('fluid-grow');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('lazy');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('rounded');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('thumbnail');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('left');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('right');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('center');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('blank');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
    }
}
