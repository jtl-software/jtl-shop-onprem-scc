<{$params.tag->getValue()}
{if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
{if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
class="breadcrumb-item{if $params.class->hasValue()} {$params.class->getValue()}{/if}"
{if $params.itemprop->hasValue()}itemprop="{$params.itemprop->getValue()}"{/if}
{if $params.itemscope->getValue() === true}itemscope {/if}
{if $params.itemtype->hasValue()}itemtype="{$params.itemtype->getValue()}"{/if}
{if $params.itemid->hasValue()}itemid="{$params.itemid->getValue()}"{/if}

>
<{$params.routerTag->getValue()} class="breadcrumb-link
{if $params.active->getValue() === true} {$params.activeClass->getValue()}{/if}
{if $params.disabled->getValue() === true} disabled{/if}"
{if $params.nofollow->getValue() === true} rel="nofollow"{/if}
{if $params.title->hasValue() === true} title="{$params.title->getValue()}"{/if}
target="{$params.target->getValue()}"
{if $params.href->hasValue()}href="{$params.href->getValue()}"{/if}
>
{$blockContent}
</{$params.routerTag->getValue()}>
</{$params.tag->getValue()}>