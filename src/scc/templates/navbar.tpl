<{$params.tag->getValue()} class="navbar {$params.class->getValue()} navbar-{$params.type->getValue()}
    {if $params.fixed->hasValue()} fixed-{$params.fixed->getValue()}{/if}
    {if $params.sticky->getValue() === true} sticky-top{/if}
    {if $params.variant->hasValue()} bg-{$params.variant->getValue()}{/if}
    {if $params.toggleable->getValue() !== false} navbar-expand-{$params.toggleable->getValue()}{/if}"
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
>
{$blockContent}
</{$params.tag->getValue()}>