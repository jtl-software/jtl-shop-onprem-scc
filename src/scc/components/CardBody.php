<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class CardBody
 * @package scc\components
 */
class CardBody extends AbstractBlockComponent
{
    /**
     * CardBody constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('cardbody.tpl');
        $this->setName('cardbody');

        $this->params[] = new ComponentProperty('footer');
        $this->params[] = new ComponentProperty('footer-tag', 'div');
        $this->params[] = new ComponentProperty('footer-bg-variant');
        $this->params[] = new ComponentProperty('footer-border-variant');
        $this->params[] = new ComponentProperty('footer-text-variant');
        $this->params[] = new ComponentProperty('footer-class');
    }
}
