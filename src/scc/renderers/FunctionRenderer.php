<?php declare(strict_types=1);

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
        $tpl       = $args[0];
        $oldParams = $tpl->getTemplateVars('params');
        $tpl       = $tpl->getSmarty();
        $html      = $tpl->assign('params', $this->mergeParams($params))
            ->assign('parentSmarty', $tpl)
            ->fetch($this->component->getTemplate());
        if ($oldParams !== null) {
            $tpl->assign('params', $oldParams);
        }

        return $html;
    }
}
