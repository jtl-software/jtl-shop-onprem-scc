<?php declare(strict_types=1);

namespace scc\renderers;

/**
 * Class CarouselRenderer
 * @package scc\renderers
 */
class CarouselRenderer extends BlockRenderer
{
    /**
     * @inheritdoc
     */
    public function render(array $params, ...$args): string
    {
        $content = $args[0];
        if ($content === null) {
            return '';
        }
        $tpl    = $args[1];
        $smarty = $tpl->getSmarty();
        $params = $this->mergeParams($params);
        $smarty->assign('params', $params)
            ->assign('blockContent', $content)
            ->assign('parentSmarty', $tpl->smarty);

        $res = $smarty->fetch($this->component->getTemplate());
        $smarty->assign('carouselSlides', 0);

        return $res;
    }
}
