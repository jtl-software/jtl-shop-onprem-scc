<{$params.tag}
    class="list-group {$params.class->getValue()}"
    {if $params.style->hasValue()} style="{$params.style->getValue()}"{/if}
    {if $params.id->hasValue()} id="{$params.id->getValue()}"{/if}>
    {$blockContent}
</{$params.tag}>