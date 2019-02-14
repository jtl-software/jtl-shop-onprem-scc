<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;
use scc\renderers\CarouselRenderer;

/**
 * Class Carousel
 * @package scc\components
 */
class Carousel extends AbstractBlockComponent
{
    /**
     * Carousel constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('carousel.tpl');
        $this->setName('carousel');

        $prop = new ComponentProperty();
        $prop->setName('disabled');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $this->params[] = new ComponentProperty('label-prev', 'Previous slide');
        $this->params[] = new ComponentProperty('label-next', 'Next slide');
        $this->params[] = new ComponentProperty('label-goto-slide', 'Go to slide');
        $this->params[] = new ComponentProperty('label-indicators', 'Select a slide to display');

        $prop = new ComponentProperty();
        $prop->setName('interval');
        $prop->setType(ComponentPropertyType::TYPE_INT);
        $prop->setDefaultValue(5000);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('indicators');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('controls');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('img-width');
        $prop->setType(ComponentPropertyType::TYPE_NUMERIC);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('img-height');
        $prop->setType(ComponentPropertyType::TYPE_NUMERIC);
        $this->params[] = $prop;

        $this->params[] = new ComponentProperty('background');

        $prop = new ComponentProperty();
        $prop->setName('value');
        $prop->setType(ComponentPropertyType::TYPE_INT);
        $prop->setDefaultValue(0);
        $this->params[] = $prop;

        $this->setRenderer(new CarouselRenderer($this));
    }
}
