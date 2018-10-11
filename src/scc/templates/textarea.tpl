<textarea
    class="form-control {$params.class->getValue()}"
    {if $params.placeholder->hasValue()}placeholder="{$params.placeholder->getValue()}"{/if}
    {if $params.rows->hasValue()}rows="{$params.rows->getValue()}"{/if}
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
    {if $params.disabled->getValue() === true}disabled{/if}
    {if $params.name->hasValue()}name="{$params.name->getValue()}"{/if}
    {if $params.required->getValue() === true} required{/if}
    {if $params.itemprop->hasValue()}itemprop="{$params.itemprop->getValue()}"{/if}
    {if $params.itemscope->getValue() === true}itemscope {/if}
    {if $params.itemtype->hasValue()}itemtype="{$params.itemtype->getValue()}"{/if}
    {if $params.itemid->hasValue()}itemid="{$params.itemid->getValue()}"{/if}
>
    {$blockContent}
</textarea>