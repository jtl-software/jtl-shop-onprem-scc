<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc;

/**
 * Class Renderer
 *
 * @package scc
 */
class Renderer implements RendererInterface
{
    /**
     * @var \JTLSmarty
     */
    private $smarty;

    /**
     * Renderer constructor.
     * @param \JTLSmarty $smarty
     */
    public function __construct(\JTLSmarty $smarty)
    {
        $this->smarty = $smarty;
        $this->smarty->addTemplateDir(__DIR__ . '/templates', __NAMESPACE__);
    }

    /**
     * @param ComponentInterface $component
     * @throws \SmartyException
     */
    public function registerComponent(ComponentInterface $component): void
    {
        $this->smarty->registerPlugin(
            (string)$component->getType(),
            $component->getName(),
            [$component->getRenderer(), 'render']
        );
    }
}
