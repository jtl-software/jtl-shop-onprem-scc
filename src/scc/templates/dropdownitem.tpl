<a
    role="menuitem"
    target="{$params.target->getValue()}"
    href="{$params.href->getValue()}"
    class="dropdown-item {$params.class}{if $params.active->getValue() === true} active{/if}{if $params.disabled->getValue() === true} disabled{/if}{if $params.variant->hasValue()} list-group-item-{$params.variant->getValue()}{/if}"
    {if $params.style->hasValue()} style="{$params.style->getValue()}"{/if}
    {if $params.id->hasValue()} id="{$params.id->getValue()}"{/if}
    {if $params.disabled->getValue() === true} aria-disabled="true"{/if}
    {if $params.href->hasValue()} href="{$params.href->getValue()}"{/if}>
    {$blockContent}
</a>