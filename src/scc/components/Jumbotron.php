<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class Jumbotron
 * @package scc\components
 */
class Jumbotron extends AbstractBlockComponent
{
    /**
     * Jumbotron constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('jumbotron.tpl');
        $this->setName('jumbotron');

        $prop = new ComponentProperty();
        $prop->setName('fluid');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('container-fluid');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $this->params[] = new ComponentProperty('header');
        $this->params[] = new ComponentProperty('header-tag', 'h1');
        $this->params[] = new ComponentProperty('lead');
        $this->params[] = new ComponentProperty('lead-tag', 'p');
        $this->params[] = new ComponentProperty('tag', 'div');
        $this->params[] = new ComponentProperty('bg-variant');
        $this->params[] = new ComponentProperty('border-variant');
        $this->params[] = new ComponentProperty('text-variant');

        $prop = new ComponentProperty();
        $prop->setName('header-level');
        $prop->setType(ComponentPropertyType::TYPE_NUMERIC);
        $prop->setDefaultValue(3);
        $this->params[] = $prop;
    }
}
