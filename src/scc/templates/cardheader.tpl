<{$params.headerTag}
    {if $params.id->hasValue()} id="{$params.id->getValue()}"{/if}
    {if $params.style->hasValue()} style="{$params.style->getValue()}"{/if}
    class="card-header
{if $params.headerBgVariant->hasValue()} bg-{$params.headerBgVariant->getValue()}{/if}
{if $params.headerTextVariant->hasValue()} text-{$params.headerTextVariant->getValue()}{/if}
{if $params.headerBorderVariant->hasValue()} border-{$params.headerBorderVariant->getValue()}{/if}"
    {if $params.itemprop->hasValue()}itemprop="{$params.itemprop->getValue()}"{/if}
    {if $params.itemscope->getValue() === true}itemscope {/if}
    {if $params.itemtype->hasValue()}itemtype="{$params.itemtype->getValue()}"{/if}
    {if $params.itemid->hasValue()}itemid="{$params.itemid->getValue()}"{/if}
>
    {$blockContent}
</{$params.headerTag}>