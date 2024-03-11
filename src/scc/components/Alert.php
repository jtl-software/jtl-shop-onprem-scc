<?php

declare(strict_types=1);

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
    }

    public function init(): void
    {
        if ($this->isInitialized) {
            return;
        }
        parent::init();
        $this->addParam(new ComponentProperty('variant', 'info'));
        $this->addParam(new ComponentProperty(
            'dismissible',
            false,
            ComponentPropertyType::TYPE_BOOL
        ));
        $this->addParam(new ComponentProperty(
            'show',
            false,
            ComponentPropertyType::TYPE_BOOL
        ));
        $this->addParam(new ComponentProperty('dismiss-label', 'Close'));
        $this->isInitialized = true;
    }
}
