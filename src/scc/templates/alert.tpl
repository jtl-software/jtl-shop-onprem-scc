<div role="alert"
    class="alert{if $params.class->hasValue()} {$params.class->getValue()}{/if}
    {if $params.variant->hasValue()} alert-{$params.variant->getValue()}{/if}
    {if $params.dismissible->getValue() === true} alert-dismissable{/if}
"
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}>
{if $params.dismissible->getValue() === true}
    <button type="button" aria-label="{$params.dismissLabel->getValue()}" class="close" data-dismiss="alert">
        <span aria-hidden="true">&times;</span>
    </button>
{/if}
{$blockContent}
</div>