<{$params.tag->getValue()}
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
    class="nav-item{if $params.class->hasValue()} {$params.class->getValue()}{/if}"
    {if $params.itemprop->hasValue()}itemprop="{$params.itemprop->getValue()}"{/if}
    {if $params.itemscope->getValue() === true}itemscope {/if}
    {if $params.itemtype->hasValue()}itemtype="{$params.itemtype->getValue()}"{/if}
    {if $params.itemid->hasValue()}itemid="{$params.itemid->getValue()}"{/if}
    {if $params.role->hasValue()}role="{$params.role->getValue()}"{/if}
    {if $params.aria->hasValue()}{foreach $params.aria->getValue() as $ariaKey => $ariaVal}aria-{$ariaKey}="{$ariaVal}"{/foreach}{/if}
    {if $params.data->hasValue()}{foreach $params.data->getValue() as $dataKey => $dataVal}data-{$dataKey}="{$dataVal}"{/foreach}{/if}
>
    <{$params.routerTag->getValue()} class="nav-link {if $params.routerClass->hasValue()}{$params.routerClass->getValue()}{/if}
    {if $params.active->getValue() === true} {$params.activeClass->getValue()}{/if}
    {if $params.disabled->getValue() === true} disabled{/if}"
    {if $params.nofollow->getValue() === true} rel="nofollow"{/if}
    {if $params.title->hasValue() === true} title="{$params.title->getValue()}"{/if}
    target="{$params.target->getValue()}"
    {if $params.href->hasValue()}href="{$params.href->getValue()}"{/if}
    {if $params.routerAria->hasValue()}{foreach $params.routerAria->getValue() as $ariaKey => $ariaVal}aria-{$ariaKey}="{$ariaVal}"{/foreach}{/if}
    {if $params.routerData->hasValue()}{foreach $params.routerData->getValue() as $dataKey => $dataVal}data-{$dataKey}="{$dataVal}"{/foreach}{/if}
    >
    {$blockContent}
    </{$params.routerTag->getValue()}>
</{$params.tag->getValue()}>