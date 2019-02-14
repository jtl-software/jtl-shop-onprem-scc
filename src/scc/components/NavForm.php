<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class NavForm
 * @package scc\components
 */
class NavForm extends AbstractBlockComponent
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('navform.tpl');
        $this->setName('navform');

        $this->params[] = new ComponentProperty('action', '');
        $this->params[] = new ComponentProperty('method', 'POST');
    }
}
