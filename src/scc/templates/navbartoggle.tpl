<button
    type="button"
    aria-label="{$params.label->getValue()}"
    aria-expanded="false"
    class="navbar-toggler {$params.class->getValue()}"
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
        {*@todo: $params.target*}
    {if $params.target->hasValue()}data-target="{$params.target->getValue()}"{/if}
    data-toggle="collapse"
    {if $params.itemprop->hasValue()}itemprop="{$params.itemprop->getValue()}"{/if}
    {if $params.itemscope->getValue() === true}itemscope {/if}
    {if $params.itemtype->hasValue()}itemtype="{$params.itemtype->getValue()}"{/if}
    {if $params.itemid->hasValue()}itemid="{$params.itemid->getValue()}"{/if}
>
    <span class="navbar-toggler-icon"></span>
</button>