<{$params.tag->getValue()}
    class="collapse{if $params.isNav->getValue() === true} navbar-collapse{/if} {$params.class->getValue()}{if $params.visible->getValue() === true} show{/if}"
    {if $params.dataParent->hasValue()} data-parent="{$params.dataParent->getValue()}"{/if}
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
>
{$blockContent}
</{$params.tag->getValue()}>
