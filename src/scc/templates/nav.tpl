<{$params.tag->getValue()}
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
    class="nav {$params.class->getValue()}
    {if $params.justified->getValue() === true} nav-justified{/if}
    {if $params.vertical->getValue() === true} flex-column{/if}
    {if $params.fill->getValue() === true} nav-fill{/if}
    {if $params.pills->getValue() === true} nav-pills{/if}
    {if $params.tabs->getValue() === true} nav-tabs{/if}"
>
{$blockContent}
</{$params.tag->getValue()}>