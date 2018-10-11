<a
    href="{$params.href|default:'#'}"
    {if $params.title->hasValue()}title="{$params.title->getValue()}" {/if}
    {if $params.id->hasValue()}id="{$params.id->getValue()}" {/if}
    {if $params.class->hasValue()}class="{$params.class->getValue()}" {/if}
    {if $params.rel->hasValue()}rel="{$params.rel->getValue()}" {/if}
    {if $params.target->hasValue()}target="{$params.target->getValue()}" {/if}
    {if $params.itemprop->hasValue()}itemprop="{$params.itemprop->getValue()}"{/if}
    {if $params.itemscope->getValue() === true}itemscope {/if}
    {if $params.itemtype->hasValue()}itemtype="{$params.itemtype->getValue()}"{/if}
    {if $params.itemid->hasValue()}itemid="{$params.itemid->getValue()}"{/if}
>
    {$blockContent}
</a>