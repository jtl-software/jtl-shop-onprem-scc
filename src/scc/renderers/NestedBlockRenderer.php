<?php declare(strict_types=1);

namespace scc\renderers;

/**
 * Class NestedBlockRenderer
 * @package scc\renderers
 */
class NestedBlockRenderer extends BlockRenderer
{
    /**
     * @inheritdoc
     */
    public function render(array $params, ...$args): string
    {
        [$content, $tpl] = $args;
        $smarty          = $tpl->getSmarty();
        if ($content === null) {
            $smarty->assign('parentBlockParams', $params);

            return '';
        }

        return $smarty->assign('params', $this->mergeParams($params))
            ->assign('blockContent', $content)
            ->assign('parentSmarty', $smarty)
            ->fetch($this->component->getTemplate());
    }
}
