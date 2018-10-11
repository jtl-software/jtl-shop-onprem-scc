{$class = 'col '|cat:$params.class->getValue()}
{if $params.offset->hasValue()}
    {$class = "{$class} offset-{$params.offset->getValue()}"}
{/if}
{if $params.offsetSm->hasValue()}
    {$class = "{$class} offset-sm-{$params.offsetSm->getValue()}"}
{/if}
{if $params.offsetMd->hasValue()}
    {$class = "{$class} offset-md-{$params.offsetMd->getValue()}"}
{/if}
{if $params.offsetLg->hasValue()}
    {$class = "{$class} offset-lg-{$params.offsetLg->getValue()}"}
{/if}
{if $params.offsetXl->hasValue()}
    {$class = "{$class} offset-xl-{$params.offsetXl->getValue()}"}
{/if}
{if $params.sm->getValue() === true}
    {$class = "{$class} col-sm"}
{elseif $params.sm->getValue() !== false}
    {$class = "{$class} col-sm-{$params.sm->getValue()}"}
{/if}
{if $params.md->getValue() === true}
    {$class = "{$class} col-md"}
{elseif $params.md->getValue() !== false}
    {$class = "{$class} col-md-{$params.md->getValue()}"}
{/if}
{if $params.lg->getValue() === true}
    {$class = "{$class} col-lg"}
{elseif $params.lg->getValue() !== false}
    {$class = "{$class} col-lg-{$params.lg->getValue()}"}
{/if}
{if $params.xl->getValue() === true}
    {$class = "{$class} col-xl"}
{elseif $params.xl->getValue() !== false}
    {$class = "{$class} col-xl-{$params.xl->getValue()}"}
{/if}
{if $params.order->hasValue()}
    {$class = "{$class} order-{$params.order->getValue()}"}
{/if}
{if $params.cols->hasValue()}
    {$class = "{$class} col-{$params.cols->getValue()}"}
{/if}
{if $params.alignSelf->hasValue()}
    {$class = "{$class} align-self-{$params.alignSelf->getValue()}"}
{/if}

<{$params.tag->getValue()}
    class="{$class}"
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
    {if $params.itemprop->hasValue()}itemprop="{$params.itemprop->getValue()}"{/if}
    {if $params.itemscope->getValue() === true}itemscope {/if}
    {if $params.itemtype->hasValue()}itemtype="{$params.itemtype->getValue()}"{/if}
    {if $params.itemid->hasValue()}itemid="{$params.itemid->getValue()}"{/if}
>
{$blockContent}
</{$params.tag->getValue()}>