<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc;

use scc\exceptions\ComponentAlreadyRegisteredException;
use JTL\Smarty\JTLSmarty;

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
    protected $smarty;

    /**
     * Renderer constructor.
     * @param JTLSmarty $smarty
     */
    public function __construct(JTLSmarty $smarty)
    {
        $this->smarty = $smarty;
        $this->smarty->addTemplateDir(__DIR__ . '/templates', __NAMESPACE__);
    }

    /**
     * @inheritdoc
     */
    public function registerComponent(ComponentInterface $component): void
    {
        try {
            $this->smarty->registerPlugin(
                (string)$component->getType(),
                $component->getName(),
                [$component->getRenderer(), 'render']
            );
        } catch (\SmartyException $e) {
            throw new ComponentAlreadyRegisteredException(
                'The component ' . $component->getName() . ' is already registered'
            );
        }
    }

    /**
     * @inheritdoc
     */
    public function unregisterComponent(string $type, string $name): void
    {
        $this->smarty->unregisterPlugin($type, $name);
    }

    /**
     * @inheritdoc
     */
    public function getRegisteredComponents(string $type): array
    {
        return $this->smarty->registered_plugins[$type];
    }
}
