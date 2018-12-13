<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;
use scc\ComponentRendererInterface;
use scc\renderers\CarouselRenderer;

/**
 * Class Carousel
 *
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

        $prop = new ComponentProperty();
        $prop->setName('disabled');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('label-prev');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('Previous slide');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('label-next');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('Next slide');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('label-goto-slide');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('Go to slide');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('label-indicators');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('Select a slide to display');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('interval');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_INT));
        $prop->setDefaultValue(5000);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('indicators');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('controls');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('img-width');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_NUMERIC));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('img-height');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_NUMERIC));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('background');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('value');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_INT));
        $prop->setDefaultValue(0);
        $this->params[] = $prop;
    }

    /**
     * @inheritdoc
     */
    public function getRenderer(): ComponentRendererInterface
    {
        return new CarouselRenderer($this);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'carousel';
    }
}
