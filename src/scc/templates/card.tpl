<div class="card {$params.class->getValue()}
    {if $params.textVariant->hasValue()} text-{$params.textVariant->getValue()}{/if}
    {if $params.borderVariant->hasValue()} border-{$params.borderVariant->getValue()}{/if}
    {if $params.bgVariant->hasValue()} bg-{$params.bgVariant->getValue()}{/if}"
    {if $params.id->hasValue()} id="{$params.id->getValue()}"{/if}
    {if $params.style->hasValue()} style="{$params.style->getValue()}"{/if}
    {if $params.itemprop->hasValue()}itemprop="{$params.itemprop->getValue()}"{/if}
    {if $params.itemscope->getValue() === true}itemscope {/if}
    {if $params.itemtype->hasValue()}itemtype="{$params.itemtype->getValue()}"{/if}
    {if $params.itemid->hasValue()}itemid="{$params.itemid->getValue()}"{/if}
    {if $params.role->hasValue()}role="{$params.role->getValue()}"{/if}
    {if $params.aria->hasValue()}{foreach $params.aria->getValue() as $ariaKey => $ariaVal}aria-{$ariaKey}="{$ariaVal}"{/foreach}{/if}
    {if $params.data->hasValue()}{foreach $params.data->getValue() as $dataKey => $dataVal}data-{$dataKey}="{$dataVal}"{/foreach}{/if}
>
    {if $params.imgSrc->hasValue()}
        <img class="card-img-top" src="{$params.imgSrc}" alt="{$params.imgAlt|default:''}">
    {/if}
    {if $params.header->hasValue()}
        <{$params.headerTag} class="card-header
        {if $params.headerBgVariant->hasValue()} bg-{$params.headerBgVariant->getValue()}{/if}
        {if $params.headerTextVariant->hasValue()} text-{$params.headerTextVariant->getValue()}{/if}
        {if $params.headerBorderVariant->hasValue()} border-{$params.headerBorderVariant->getValue()}{/if}
        ">
            {$params.header}
        </{$params.headerTag}>
    {/if}
    {if $params.noBody->getValue() === false}
        <div class="card-body{if $params.overlay->getValue() === true} card-img-overlay{/if}">
    {/if}
    {if $params.title->hasValue()}<{$params.titleTag->getValue()} class="card-title">{$params.title}</{$params.titleTag->getValue()}>{/if}
    {if $params.subtitle->hasValue()}<{$params.subtitleTag->getValue()} class="card-subtitle mb-2 text-muted">{$params.subtitle}</{$params.subtitleTag->getValue()}>{/if}
    {$blockContent|default:''}
    {*{foreach $params.links as $link}*}
        {*<a href="#" class="card-link">{$link}</a>*}
    {*{/foreach}*}
    {if $params.noBody->getValue() === false}</div>{/if}
    {if $params.footer->hasValue()}
        <{$params.footerTag} class="card-footer
        {if $params.footerBgVariant->hasValue()} bg-{$params.footerBgVariant->getValue()}{/if}
        {if $params.footerTextVariant->hasValue()} text-{$params.footerBgVariant->getValue()}{/if}
        {if $params.footerBorderVariant->hasValue()} border-{$params.footerBorderVariant->getValue()}{/if}
        ">
            {$params.footer}
        </{$params.footerTag}>
    {/if}
</div>