<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\components;

/**
 * Class RadioGroup
 *
 * @package scc\components
 */
class RadioGroup extends CheckboxGroup
{
    /**
     * @inheritdoc
     */
    public function getTemplate(): string
    {
        return 'radiogroup.tpl';
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'radiogroup';
    }
}
