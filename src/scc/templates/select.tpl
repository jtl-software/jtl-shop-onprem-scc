<select
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
    {if $params.multiple->getValue() === true}multiple{/if}
    {if $params.autocomplete->hasValue()}autocomplete="{$params.autocomplete->getValue()}"{/if}
    {if $params.name->hasValue()}name="{$params.name->getValue()}"{/if}
    {if $params.title->hasValue()}title="{$params.title->getValue()}"{/if}
    {if $params.required->getValue() === true}required{/if}
    class="form-control custom-select{if $params.class->hasValue()} {$params.class->getValue()}{/if}
    {if $params.size->hasValue()}form-control-{$params.size->getValue()}{/if}
"

>
    {$blockContent}
</select>