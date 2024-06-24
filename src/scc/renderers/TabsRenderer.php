<?php

declare(strict_types=1);

namespace scc\renderers;

/**
 * Class TabsRenderer
 * @package scc\renderers
 */
class TabsRenderer extends BlockRenderer
{
    /**
     * @inheritdoc
     */
    public function render(array $params, ...$args): string
    {
        $this->preset();
        $content = $args[0];
        if ($content === null) {
            return '';
        }
        $tpl = $args[1];

        return $tpl->getSmarty()->assign('params', $this->mergeParams($params))
            ->assign('blockContent', $content)
            ->assign('tabContents', $tpl->getTemplateVars('tabContents'))
            ->assign('tabIDs', $tpl->getTemplateVars('tabIDs'))
            ->assign('activeTabID', $tpl->getTemplateVars('activeTabID'))
            ->assign('parentSmarty', $tpl->parent->getSmarty())
            ->fetch($this->component->getTemplate());
    }
}
