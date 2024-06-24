<?php

declare(strict_types=1);

namespace scc\renderers;

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
        $this->preset();
        $tpl       = $args[0];
        $smarty    = $tpl->getSmarty();
        $oldParams = $tpl->getTemplateVars('params');
        $html      = $smarty->assign('params', $this->mergeParams($params))
            ->assign('parentSmarty', $smarty)
            ->fetch($this->component->getTemplate());
        if ($oldParams !== null) {
            $tpl->assign('params', $oldParams);
        }

        return $html;
    }
}
