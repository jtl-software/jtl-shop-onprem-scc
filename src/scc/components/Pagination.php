<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

use scc\ComponentProperty;
use scc\ComponentPropertyType;

/**
 * Class Pagination
 * @package scc\components
 */
class Pagination extends AbstractBlockComponent
{
    /**
     * Pagination constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('pagination.tpl');
        $this->setName('pagination');

        $prop = new ComponentProperty();
        $prop->setName('value');
        $prop->setType(ComponentPropertyType::TYPE_INT);
        $prop->setDefaultValue(1);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('disabled');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('hide-goto-end-buttons');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('hide-ellipsis');
        $prop->setType(ComponentPropertyType::TYPE_BOOL);
        $prop->setDefaultValue(false);
        $this->params[] = $prop;
        $this->params[] = new ComponentProperty('size', 'md');
        $this->params[] = new ComponentProperty('align', 'left');
        $this->params[] = new ComponentProperty('label-first-page', 'leftleft');
        $this->params[] = new ComponentProperty('first-text', '&laquo;');
        $this->params[] = new ComponentProperty('label-prev-page', 'Go to previous page');
        $this->params[] = new ComponentProperty('prev-text', '&lsaquo;');
        $this->params[] = new ComponentProperty('label-next-page', 'Go to next page');
        $this->params[] = new ComponentProperty('next-text', '&rsaquo;');
        $this->params[] = new ComponentProperty('label-last-page', 'Go to last page');
        $this->params[] = new ComponentProperty('last-text', '&raquo;');
        $this->params[] = new ComponentProperty('label-page', 'Go to page');
        $this->params[] = new ComponentProperty('ellipsis-text', '&hellip;');

        $prop = new ComponentProperty();
        $prop->setName('per-page');
        $prop->setType(ComponentPropertyType::TYPE_INT);
        $prop->setDefaultValue(20);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('total-rows');
        $prop->setType(ComponentPropertyType::TYPE_INT);
        $prop->setDefaultValue(20);
        $this->params[] = $prop;
    }
}
