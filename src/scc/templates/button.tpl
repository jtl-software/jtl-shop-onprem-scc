{if $params.variant->hasValue()}
    {assign var=class value='btn '|cat:$params.class|cat:' btn-'|cat:$params.variant}
{else}
    {assign var=class value='btn '|cat:$params.class}
{/if}
<button
    type="{$params.type}"
    class="{$class}{if $params.size->hasValue()} btn-{$params.size->getValue()}{/if}{if $params.block->getValue() === true} btn-block{/if}"
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
    {if $params.href->hasValue()}href="{$params.href->getValue()}"{/if}
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
    {if $params.title->hasValue()}title="{$params.title->getValue()}" {/if}
    {if $params.disabled->getValue() === true}disabled{/if}
    {if $params.dataToggle->hasValue()}data-toggle="{$params.dataToggle->getValue()}"{/if}
    {if $params.dataTarget->hasValue()}data-target="{$params.dataTarget->getValue()}"{/if}>
{$blockContent}
</button>