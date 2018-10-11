<form
    class="{$params.class->getValue()}{if $params.inline->getValue() === true} form-inline{/if}"
    {if $params.novalidate->getValue() === true}novalidate="novalidate"{/if}
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
    {if $params.action->hasValue()}action="{$params.action->getValue()}"{/if}
    {if $params.method->hasValue()}method="{$params.method->getValue()}"{/if}
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
    {if $params.itemprop->hasValue()}itemprop="{$params.itemprop->getValue()}"{/if}
    {if $params.itemscope->getValue() === true}itemscope {/if}
    {if $params.itemtype->hasValue()}itemtype="{$params.itemtype->getValue()}"{/if}
    {if $params.itemid->hasValue()}itemid="{$params.itemid->getValue()}"{/if}
>
    {$blockContent}
</form>