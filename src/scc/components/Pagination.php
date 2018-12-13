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
 *
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

        $prop = new ComponentProperty();
        $prop->setName('value');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_INT));
        $prop->setDefaultValue(1);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('disabled');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('hide-goto-end-buttons');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('hide-ellipsis');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_BOOL));
        $prop->setDefaultValue(false);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('size');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('md');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('align');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('left');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('label-first-page');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('Go to first page');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('first-text');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('&laquo;');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('label-prev-page');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('Go to previous page');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('prev-text');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('&lsaquo;');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('label-next-page');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('Go to next page');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('next-text');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('&rsaquo;');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('label-last-page');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('Go to last page');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('last-text');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('&raquo;');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('label-page');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('Go to page');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('ellipsis-text');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('&hellip;');
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('per-page');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_INT));
        $prop->setDefaultValue(20);
        $this->params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('total-rows');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_INT));
        $prop->setDefaultValue(20);
        $this->params[] = $prop;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'pagination';
    }
}
