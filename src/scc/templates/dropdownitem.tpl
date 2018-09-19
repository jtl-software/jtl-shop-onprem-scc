<{$params.tag->getValue()}
    role="menuitem"
    {if $params.href->hasValue()}
        target="{$params.target->getValue()}"
        href="{$params.href->getValue()}"
    {/if}
class="dropdown-item {$params.class}{if $params.active->getValue() === true} active{/if}{if $params.disabled->getValue() === true} disabled{/if}{if $params.variant->hasValue()} list-group-item-{$params.variant->getValue()}{/if}"
    {if $params.style->hasValue()} style="{$params.style->getValue()}"{/if}
    {if $params.id->hasValue()} id="{$params.id->getValue()}"{/if}
    {if $params.disabled->getValue() === true} aria-disabled="true"{/if}
    {if $params.href->hasValue()} href="{$params.href->getValue()}"{/if}
    {if $params.rel->hasValue()}rel="{$params.rel->getValue()}" {/if}>
{$blockContent}
</{$params.tag->getValue()}>