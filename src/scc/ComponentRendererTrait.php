<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc;

/**
 * Trait ComponentRendererTrait
 *
 * @package scc
 */
trait ComponentRendererTrait
{
    /**
     * @param ComponentPropertyInterface[] $base
     * @param array                        $dynamic
     * @return ComponentPropertyInterface[]
     */
    private function mergeParams(array $base, array $dynamic): array
    {
        $merged = [];
        foreach ($base as $param) {
            if (isset($dynamic[$param->getName()])) {
                $param->setValue($dynamic[$param->getName()]);
            } elseif ($param->getType() === ComponentPropertyType::TYPE_UNIQUEID) {
                $param->setValue(\uniqid('', false));
            } else {
                $param->setValue($param->getDefaultValue());
            }
            $merged[$this->dashesToCamelCase($param->getName())] = $param;
        }

        return $merged;
    }

    /**
     * @param string $string
     * @return string
     */
    private function dashesToCamelCase($string): string
    {
        return \lcfirst(\str_replace('-', '', \ucwords($string, '-')));
    }
}
