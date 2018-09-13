<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc;

/**
 * Interface RendererInterface
 *
 * @package scc
 */
interface RendererInterface
{
    /**
     * @param ComponentInterface $component
     */
    public function registerComponent(ComponentInterface $component): void;
}
