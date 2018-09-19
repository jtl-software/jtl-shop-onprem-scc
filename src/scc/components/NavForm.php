<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

/**
 * Class NavForm
 *
 * @package scc\components
 */
class NavForm extends AbstractBlockComponent
{
    public function __construct()
    {
        $prop = new ComponentProperty();
        $prop->setName('action');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('');
        $params[] = $prop;

        $prop = new ComponentProperty();
        $prop->setName('method');
        $prop->setType(new ComponentPropertyType(ComponentPropertyType::TYPE_STRING));
        $prop->setDefaultValue('POST');
        $params[] = $prop;
    }

    /**
     * @inheritdoc
     */
    public function getTemplate(): string
    {
        return 'navform.tpl';
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'navform';
    }
}
