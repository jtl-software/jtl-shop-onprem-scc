<{$params.headerTag}
    {if $params.id->hasValue()} id="{$params.id->getValue()}"{/if}
    {if $params.style->hasValue()} style="{$params.style->getValue()}"{/if}
    class="card-header
{if $params.headerBgVariant->hasValue()} bg-{$params.headerBgVariant->getValue()}{/if}
{if $params.headerTextVariant->hasValue()} text-{$params.headerTextVariant->getValue()}{/if}
{if $params.headerBorderVariant->hasValue()} border-{$params.headerBorderVariant->getValue()}{/if}
">
    {$blockContent}
</{$params.headerTag}>