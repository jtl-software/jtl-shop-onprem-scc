<?php declare(strict_types=1);

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
        $content = $args[0];
        /** @var \JTL\Smarty\JTLSmarty|Smarty $tpl */
        $tpl    = $args[1];
        $smarty = $tpl->getSmarty();

        if ($content === null) {
            $stack   = $smarty->getTemplateVars('_tabStack') ?? [];
            $stack[] = [
                'tabIDs'      => $smarty->getTemplateVars('tabIDs') ?? [],
                'tabContents' => $smarty->getTemplateVars('tabContents') ?? [],
                'activeTabID' => $smarty->getTemplateVars('activeTabID') ?? '',
            ];
            $smarty->assign('_tabStack', $stack);
            $smarty->assign('tabIDs', []);
            $smarty->assign('tabContents', []);
            $smarty->assign('activeTabID', '');

            return '';
        }

        $result = $smarty->assign('params', $this->mergeParams($params))
            ->assign('blockContent', $content)
            ->assign('tabContents', $smarty->getTemplateVars('tabContents'))
            ->assign('tabIDs', $smarty->getTemplateVars('tabIDs'))
            ->assign('activeTabID', $smarty->getTemplateVars('activeTabID'))
            ->assign('parentSmarty', $smarty)
            ->fetch($this->component->getTemplate());

        // restore parent tab state from stack
        $stack    = $smarty->getTemplateVars('_tabStack') ?? [];
        $restored = array_pop($stack);
        $smarty->assign('_tabStack', $stack);

        if ($restored !== null) {
            $smarty->assign('tabIDs', $restored['tabIDs']);
            $smarty->assign('tabContents', $restored['tabContents']);
            $smarty->assign('activeTabID', $restored['activeTabID']);
        }

        return $result;
    }
}
