<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\renderers;

use scc\ComponentInterface;
use scc\ComponentRendererInterface;

/**
 * Class FunctionRenderer
 * @package scc\renderers
 */
class FunctionRenderer extends BlockRenderer
{
    /**
     * @inheritdoc
     */
    public function render(array $params, ...$args): string
    {
        $tpl    = $args[0];
        $params = $this->mergeParams($this->component->getParams(), $params);

        return $tpl->assign('params', $params)
                   ->assign('parentSmarty', $tpl->smarty)
                   ->fetch($this->component->getTemplate());
    }
}
