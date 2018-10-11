{if $params.variant->hasValue()}
    {assign var=class value=$params.class->getValue()|cat:' btn-'|cat:$params.variant}
{else}
    {assign var=class value=$params.class->getValue()}
{/if}
<{$params.tag}
    class="badge {$class}{if $params.active->getValue() === true} active{/if}{if $params.disabled->getValue() === true} disabled{/if}{if $params.variant->hasValue()} badge-{$params.variant->getValue()}{/if}{if $params.pill->getValue() === true} badge-pill{/if}"
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
    {if $params.itemprop->hasValue()}itemprop="{$params.itemprop->getValue()}"{/if}
    {if $params.itemscope->getValue() === true}itemscope {/if}
    {if $params.itemtype->hasValue()}itemtype="{$params.itemtype->getValue()}"{/if}
    {if $params.itemid->hasValue()}itemid="{$params.itemid->getValue()}"{/if}>
{$blockContent}
</{$params.tag}>