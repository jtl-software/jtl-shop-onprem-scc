<?php

declare(strict_types=1);

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
        $this->preset();
        [$content, $tpl] = $args;
        if ($content === null) {
            $tpl->getSmarty()->assign('parentBlockParams', $params);

            return '';
        }

        return $tpl->getSmarty()->assign('params', $this->mergeParams($params))
            ->assign('blockContent', $content)
            ->assign('parentSmarty', $tpl->getSmarty())
            ->fetch($this->component->getTemplate());
    }
}
