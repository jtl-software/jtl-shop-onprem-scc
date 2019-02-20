<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc\renderers;

use scc\ComponentInterface;
use scc\ComponentRendererInterface;
use scc\ComponentPropertyType;

/**
 * Class BlockRenderer
 * @package scc\renderers
 */
class BlockRenderer implements ComponentRendererInterface
{
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
        $params          = $this->mergeParams($this->component->getParams(), $params);
        if ($content === null) {
            $tpl->smarty->assign('parentBlockParams', $params)
                        ->assign('pbp', $params);

            return '';
        }

        return $tpl->assign('params', $params)
                   ->assign('blockContent', $content)
                   ->assign('parentSmarty', $tpl->smarty)
                   ->fetch($this->component->getTemplate());
    }

    /**
     * @param ComponentPropertyInterface[] $base
     * @param array                        $dynamic
     * @return ComponentPropertyInterface[]
     */
    protected function mergeParams(array $base, array $dynamic): array
    {
        $merged = [];
        foreach ($base as $param) {
            $name = $param->getName();
            if (isset($dynamic[$name])) {
                $param->setValue($dynamic[$name]);
            } elseif ($param->getType() === ComponentPropertyType::TYPE_UNIQUEID) {
                $param->setValue(\uniqid('', false));
            } else {
                $param->setValue($param->getDefaultValue());
            }
            $merged[$name] = $param;
        }

        return $merged;
    }
}
