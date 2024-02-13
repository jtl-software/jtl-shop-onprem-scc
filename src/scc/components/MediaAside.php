<?php declare(strict_types=1);

namespace scc\components;

use scc\ComponentProperty;

/**
 * Class MediaAside
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
    }

    public function init(): void
    {
        parent::init();
        if ($this->isInitialized) {
            return;
        }
        $this->addParam(new ComponentProperty('tag', 'div'));
        $this->addParam(new ComponentProperty('vertical-align', 'top'));
        $this->isInitialized = true;
    }
}
