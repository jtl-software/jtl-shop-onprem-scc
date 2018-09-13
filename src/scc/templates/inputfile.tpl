<input
    type="file"
    class="form-control-file {$params.class->getValue()}"
    {if $params.placeholder->hasValue()}placeholder="{$params.placeholder->getValue()}"{/if}
    {if $params.required->getValue() === true} required{/if}
    {if $params.disabled->getValue() === true} disabled{/if}
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
    {if $params.name->hasValue()}name="{$params.name->getValue()}"{/if}
>