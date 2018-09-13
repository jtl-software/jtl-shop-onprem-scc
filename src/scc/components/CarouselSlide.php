<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class CarouselSlide
 *
 * @package scc\components
 */
class CarouselSlide extends AbstractBlockComponent
{
    /**
     * CarouselSlide constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $prop = new ComponentProperty();
        $prop->setName('caption-text');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('active');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('img-blank');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('img-blank-color');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('transparent');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('src');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('img-src');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('img-alt');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('');
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
        $prop->setName('content-tag');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('div');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('caption');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('caption-tag');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('h3');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('caption-text-tag');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('p');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('background');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $this->params[] = $prop;
    }

    /**
     * @inheritdoc
     */
    public function getTemplate(): string
    {
        return 'carouselslide.tpl';
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'carouselslide';
    }
}
