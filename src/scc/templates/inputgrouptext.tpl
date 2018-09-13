<{$params.tag->getValue()}
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
    class="input-group-text {$params.class->getValue()}">
    {$blockContent}
</{$params.tag->getValue()}>