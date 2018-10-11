<div class="card-footer
    {if $params.footerBgVariant->hasValue()} bg-{$params.footerBgVariant->getValue()}{/if}
    {if $params.footerTextVariant->hasValue()} text-{$params.footerBgVariant->getValue()}{/if}
    {if $params.footerBorderVariant->hasValue()} border-{$params.footerBorderVariant->getValue()}{/if}
"
    {if $params.id->hasValue()} id="{$params.id->getValue()}"{/if}
    {if $params.style->hasValue()} style="{$params.style->getValue()}"{/if}
    {if $params.itemprop->hasValue()}itemprop="{$params.itemprop->getValue()}"{/if}
    {if $params.itemscope->getValue() === true}itemscope {/if}
    {if $params.itemtype->hasValue()}itemtype="{$params.itemtype->getValue()}"{/if}
    {if $params.itemid->hasValue()}itemid="{$params.itemid->getValue()}"{/if}
>
    {$blockContent}
</div>