<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class InputGroup
 * @package scc\components
 */
class InputGroup extends AbstractBlockComponent
{
    /**
     * InputGroup constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('inputgroup.tpl');
        $this->setName('inputgroup');

        $this->params[] = new ComponentProperty('size');
        $this->params[] = new ComponentProperty('prepend');
        $this->params[] = new ComponentProperty('append');
        $this->params[] = new ComponentProperty('tag', 'div');
    }
}
