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
