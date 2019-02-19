<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\renderers;

use scc\ComponentInterface;
use scc\ComponentRendererInterface;
use scc\ComponentRendererTrait;

/**
 * Class NestedBlockRenderer
 * @package scc\renderers
 */
class NestedBlockRenderer implements ComponentRendererInterface
{
    use ComponentRendererTrait;

    /**
     * @var ComponentInterface
     */
    protected $component;

    /**
     * BlockRenderer constructor.
     *
     * @param ComponentInterface $component
     */
    public function __construct(ComponentInterface $component)
    {
        $this->component = $component;
    }

    /**
     * @inheritdoc
     */
    public function render(array $params, ...$args): string
    {
        [$content, $tpl] = $args;
        if ($content === null) {
            $tpl->smarty->assign('parentBlockParams', $params);

            return '';
        }
        $params = $this->mergeParams($this->component->getParams(), $params);

        return $tpl->assign('params', $params)
                   ->assign('blockContent', $content)
                   ->assign('parentSmarty', $tpl->smarty)
                   ->fetch($this->component->getTemplate());
    }
}
