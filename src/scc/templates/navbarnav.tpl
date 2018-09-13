<{$params.tag->getValue()}
    class="navbar-nav {$params.class->getValue()}"
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
>
    {$blockContent}
</{$params.tag->getValue()}>
