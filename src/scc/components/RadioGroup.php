<?php declare(strict_types=1);

namespace scc\components;

/**
 * Class RadioGroup
 * @package scc\components
 */
class RadioGroup extends CheckboxGroup
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('radiogroup.tpl');
        $this->setName('radiogroup');
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
