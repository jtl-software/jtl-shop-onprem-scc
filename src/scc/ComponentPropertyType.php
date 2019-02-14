<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc;

use MyCLabs\Enum\Enum;

/**
 * Class ComponentPropertyType
 * @package scc
 */
class ComponentPropertyType extends Enum
{
    public const TYPE_BOOL = 'bool';

    public const TYPE_STRING = 'string';

    public const TYPE_INT = 'int';

    public const TYPE_NUMERIC = 'numeric';

    public const TYPE_OBJECT = 'object';

    public const TYPE_FUNCTION = 'function';

    public const TYPE_ARRAY = 'array';

    public const TYPE_UNIQUEID = 'uniqueid';
}
