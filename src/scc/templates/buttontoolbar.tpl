<div role="toolbar"
    class="btn-toolbar {$class}"
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
    {if $params.ariaLabel->hasValue()}aria-label="{$params.ariaLabel->getValue()}"{/if}
>
    {$blockContent}
</div>