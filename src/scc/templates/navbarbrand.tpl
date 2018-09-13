<{$params.tag->getValue()}
    class="navbar-brand {$params.class->getValue()}"
    {if $params.target->hasValue()}target="{$params.target->getValue()}"{/if}
    {if $params.href->hasValue()}href="{$params.href->getValue()}"{/if}
    {if $params.rel->hasValue()}rel="{$params.rel->getValue()}"{/if}
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
>
    {$blockContent}
</{$params.tag->getValue()}>