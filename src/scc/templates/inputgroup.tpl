<{$params.tag->getValue()}
    role="group"
    class="input-group {$params.class->getValue()}{if $params.size->hasValue()} input-group-{$params.size->getValue()}{/if}"
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
>
    {if $params.prepend->hasValue()}
        {*{inputgroupaddon append=false is-text=true}{$params.prepend->getValue()}{/inputgroupaddon}*}
        <div class="input-group-prepend">
            <div class="input-group-text">{$params.prepend->getValue()}</div>
        </div>
    {/if}
    {$blockContent}
    {if $params.append->hasValue()}
        {inputgroupaddon append=true is-text=true}{$params.append->getValue()}{/inputgroupaddon}
        {*<div class="input-group-append">*}
            {*<div class="input-group-text">{$params.append->getValue()}</div>*}
        {*</div>*}
    {/if}
</{$params.tag->getValue()}>