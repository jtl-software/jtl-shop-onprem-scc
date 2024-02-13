<?php declare(strict_types=1);

namespace scc\components;

use scc\ComponentProperty;

/**
 * Class FormRow
 * @package scc\components
 */
class FormRow extends AbstractBlockComponent
{
    /**
     * FormRow constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('formrow.tpl');
        $this->setName('formrow');
    }

    public function init(): void
    {
        parent::init();
        if ($this->isInitialized) {
            return;
        }
        $this->addParam(new ComponentProperty('tag', 'div'));
        $this->isInitialized = true;
    }
}
