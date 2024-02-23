<?php declare(strict_types=1);

namespace scc\components;

use scc\ComponentProperty;

/**
 * Class ListGroup
 * @package scc\components
 */
class ListGroup extends AbstractBlockComponent
{
    /**
     * ListGroup constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('listgroup.tpl');
        $this->setName('listgroup');
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
