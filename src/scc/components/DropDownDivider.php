<?php

declare(strict_types=1);

namespace scc\components;

use scc\ComponentProperty;

/**
 * Class DropDownDivider
 * @package scc\components
 */
class DropDownDivider extends AbstractFunctionComponent
{
    /**
     * DropDownDivider constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('dropdowndivider.tpl');
        $this->setName('dropdowndivider');
        $this->addParam(new ComponentProperty('tag', 'div'));
    }

    public function init(): void
    {
        if ($this->isInitialized === true) {
            return;
        }
        parent::init();
        $this->isInitialized = true;
    }
}
