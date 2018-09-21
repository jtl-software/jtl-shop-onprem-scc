<nav aria-label="breadcrumb"
{if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
{if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
{if $params.class->hasValue()}class="nav-item{$params.class->getValue()}{/if}>
    <{$params.tag} class="breadcrumb{if $params.class->hasValue()} {$params.class->getValue()}{/if}">
        {$blockContent}
    </{$params.tag}>
</nav>