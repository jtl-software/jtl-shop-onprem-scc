<nav aria-label="breadcrumb">
    <{$params.tag} class="breadcrumb{if $params.class->hasValue()} {$params.class->getValue()}{/if}">
        {$blockContent}
    </{$params.tag}>
</nav>