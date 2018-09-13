<a
    href="{$params.href|default:'#'}"
    {if $params.title->hasValue()}title="{$params.title->getValue()}" {/if}
    {if $params.id->hasValue()}id="{$params.id->getValue()}" {/if}
    {if $params.class->hasValue()}class="{$params.class->getValue()}" {/if}
    {if $params.rel->hasValue()}rel="{$params.rel->getValue()}" {/if}
    {if $params.target->hasValue()}target="{$params.target->getValue()}" {/if}>
    {$blockContent}
</a>