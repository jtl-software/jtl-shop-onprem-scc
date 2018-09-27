<input
    type="{$params.type->getValue()}"
    class="form-control {$params.class->getValue()}{if $params.size->hasValue()} form-control-{$params.size->getValue()}{/if}"
    {if $params.placeholder->hasValue()}placeholder="{$params.placeholder->getValue()}"{/if}
    {if $params.readonly->getValue() === true} readonly{/if}
    {if $params.id->hasValue()} id="{$params.id->getValue()}"{/if}
    {if $params.required->getValue() === true} required{/if}
    {if $params.disabled->getValue() === true} disabled{/if}
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
    {if $params.value->hasValue()}value="{$params.value->getValue()}"{/if}
    {if $params.min->hasValue()}min="{$params.min->getValue()}"{/if}
    {if $params.max->hasValue()}max="{$params.max->getValue()}"{/if}
    {if $params.step->hasValue()}step="{$params.step->getValue()}"{/if}
    {if $params.name->hasValue()}name="{$params.name->getValue()}"{/if}
    {if $params.autocomplete->hasValue()}autocomplete="{$params.autocomplete->getValue()}"{/if}
>