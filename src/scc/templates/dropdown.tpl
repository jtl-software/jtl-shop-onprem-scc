<div class="btn-group dropdown {if $params.dropup->getValue() === true} dropup{/if} {$params.class->getValue()}"
    {if $params.style->hasValue()} style="{$params.style->getValue()}"{/if}
    {if $params.id->hasValue()} aria-labelledby="{$params.id->getValue()}"{/if}
>
    <button
        class="btn btn-{$params.variant->getValue()} dropdown-toggle"
        type="button"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false">
        {$params.text->getValue()}</button>
    <div role="{$params.role->getValue()}" class="dropdown-menu">
        {$blockContent}
    </div>
</div>