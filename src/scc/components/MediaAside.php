<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class MediaAside
 *
 * @package scc\components
 */
class MediaAside extends AbstractBlockComponent
{
    /**
     * MediaAside constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('mediaaside.tpl');
        $this->setName('mediaaside');

        $this->params[] = new ComponentProperty('tag', 'div');
        $this->params[] = new ComponentProperty('vertical-align', 'top');
    }
}
