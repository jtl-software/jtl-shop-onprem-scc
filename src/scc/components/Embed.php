<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class Embed
 * @package scc\components
 */
class Embed extends AbstractBlockComponent
{
    /**
     * Embed constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('embed.tpl');
        $this->setName('embed');

        $this->params[] = new ComponentProperty('src');
        $this->params[] = new ComponentProperty('type', 'iframe');
        $this->params[] = new ComponentProperty('aspect', '16by9');
        $this->params[] = new ComponentProperty('preload');
        $this->params[] = new ComponentProperty('width');
        $this->params[] = new ComponentProperty('height');
        $this->params[] = new ComponentProperty('poster');
        $this->params[] = new ComponentProperty('type');

        $prop = new ComponentProperty();
        $prop->setName('allowfullscreen');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('controls');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('autoplay');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('autobuffer');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('loop');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('muted');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
    }
}
