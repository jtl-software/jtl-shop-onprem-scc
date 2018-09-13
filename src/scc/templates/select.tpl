<select
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
    {if $params.multiple->getValue() === true}multiple{/if}
    class="form-control custom-select{if $params.class->hasValue()} {$params.class->getValue()}{/if}
    {if $params.size->hasValue()}form-control-{$params.size->getValue()}{/if}
"

>
    {$blockContent}
</select>