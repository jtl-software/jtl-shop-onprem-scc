<{$params.tag->getValue()}
    class="input-group-{if $params.append->getValue() === true}append{else}prepend{/if} {$params.class->getValue()}"
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
>
    {if $params.isText->getValue() === true}
        {inputgrouptext}{$blockContent}{/inputgrouptext}
    {else}
        {$blockContent}
    {/if}
</{$params.tag->getValue()}>