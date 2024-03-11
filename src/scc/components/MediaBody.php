<?php

declare(strict_types=1);

namespace scc\components;

use scc\ComponentProperty;

/**
 * Class MediaBody
 * @package scc\components
 */
class MediaBody extends AbstractBlockComponent
{
    /**
     * MediaBody constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('mediabody.tpl');
        $this->setName('mediabody');
    }

    public function init(): void
    {
        if ($this->isInitialized) {
            return;
        }
        parent::init();
        $this->addParam(new ComponentProperty('tag', 'div'));
        $this->isInitialized = true;
    }
}
