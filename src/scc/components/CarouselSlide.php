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
        $this->setTemplate('carouselslide.tpl');
        $this->setName('carouselslide');

        $this->params[] = new ComponentProperty('caption-text');

        $prop = new ComponentProperty();
        $prop->setName('active');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('img-blank');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $this->params[] = new ComponentProperty('img-blank-color', 'transparent');
        $this->params[] = new ComponentProperty('src');
        $this->params[] = new ComponentProperty('img-src');
        $this->params[] = new ComponentProperty('img-alt', '');
        $this->params[] = new ComponentProperty('img-width');
        $this->params[] = new ComponentProperty('img-height');
        $this->params[] = new ComponentProperty('content-tag', 'div');
        $this->params[] = new ComponentProperty('caption');
        $this->params[] = new ComponentProperty('caption-tag', 'h3');
        $this->params[] = new ComponentProperty('caption-text-tag', 'p');
        $this->params[] = new ComponentProperty('background');
    }
}
