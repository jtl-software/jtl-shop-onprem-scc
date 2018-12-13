<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class Alert
 * @package scc\components
 */
class Alert extends AbstractBlockComponent
{
    /**
     * Alert constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('alert.tpl');
        $this->setName('alert');

        $this->params[] = new ComponentProperty('variant', 'info');
        $this->params[] = new ComponentProperty(
            'dismissible',
            false,
            new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL)
        );
        $this->params[] = new ComponentProperty(
            'show',
            false,
            new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL)
        );
        $this->params[] = new ComponentProperty('dismiss-label', 'Close');
    }
}
