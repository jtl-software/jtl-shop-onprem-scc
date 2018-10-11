<{$params.tag->getValue()}
    class="navbar-brand {$params.class->getValue()}"
    {if $params.target->hasValue()}target="{$params.target->getValue()}"{/if}
    {if $params.href->hasValue()}href="{$params.href->getValue()}"{/if}
    {if $params.rel->hasValue()}rel="{$params.rel->getValue()}"{/if}
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
    {if $params.itemprop->hasValue()}itemprop="{$params.itemprop->getValue()}"{/if}
    {if $params.itemscope->getValue() === true}itemscope {/if}
    {if $params.itemtype->hasValue()}itemtype="{$params.itemtype->getValue()}"{/if}
    {if $params.itemid->hasValue()}itemid="{$params.itemid->getValue()}"{/if}
>
    {$blockContent}
</{$params.tag->getValue()}>