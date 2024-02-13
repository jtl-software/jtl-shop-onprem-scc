<?php declare(strict_types=1);

namespace scc\components;

/**
 * Class Accordion
 * @package scc\components
 */
class Accordion extends AbstractBlockComponent
{
    /**
     * Accordion constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('accordion.tpl');
        $this->setName('accordion');
    }

    public function init(): void
    {
        if ($this->isInitialized) {
            return;
        }
        parent::init();
        $this->isInitialized = true;
    }
}
