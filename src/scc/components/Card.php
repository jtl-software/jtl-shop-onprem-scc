<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class Card
 * @package scc\components
 */
class Card extends AbstractBlockComponent
{
    /**
     * Card constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('card.tpl');
        $this->setName('card');

        $this->params[] = new ComponentProperty('img-src');
        $this->params[] = new ComponentProperty('img-alt');
        $this->params[] = new ComponentProperty('title');
        $this->params[] = new ComponentProperty('title-tag', 'h4');
        $this->params[] = new ComponentProperty('subtitle');
        $this->params[] = new ComponentProperty('subtitle-tag', 'h6');

        $prop = new ComponentProperty();
        $prop->setName('no-body');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('img-top');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('img-bottom');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('img-fluid');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('overlay');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $this->params[] = new ComponentProperty('header');
        $this->params[] = new ComponentProperty('header-tag', 'div');
        $this->params[] = new ComponentProperty('footer');
        $this->params[] = new ComponentProperty('footer-tag', 'div');
        $this->params[] = new ComponentProperty('body-tag');
        $this->params[] = new ComponentProperty('body-bg-variant');
        $this->params[] = new ComponentProperty('body-border-variant');
        $this->params[] = new ComponentProperty('body-text-variant');
        $this->params[] = new ComponentProperty('body-class');
        $this->params[] = new ComponentProperty('header-bg-variant');
        $this->params[] = new ComponentProperty('header-border-variant');
        $this->params[] = new ComponentProperty('header-text-variant');
        $this->params[] = new ComponentProperty('header-class');
        $this->params[] = new ComponentProperty('footer-bg-variant');
        $this->params[] = new ComponentProperty('footer-border-variant');
        $this->params[] = new ComponentProperty('footer-text-variant');
        $this->params[] = new ComponentProperty('footer-class');
        $this->params[] = new ComponentProperty('bg-variant');
        $this->params[] = new ComponentProperty('border-variant');
        $this->params[] = new ComponentProperty('text-variant');
        $this->params[] = new ComponentProperty('align');
    }
}
