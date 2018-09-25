<nav aria-label="breadcrumb"
{if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
{if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
{if $params.class->hasValue()}class="nav-item{$params.class->getValue()}{/if}
{if $params.itemprop->hasValue()}itemprop="{$params.itemprop->getValue()}"{/if}
{if $params.itemscope->getValue() === true}itemscope {/if}
{if $params.itemtype->hasValue()}itemtype="{$params.itemtype->getValue()}"{/if}
{if $params.itemid->hasValue()}itemid="{$params.itemid->getValue()}"{/if}>
    <{$params.tag} class="breadcrumb{if $params.class->hasValue()} {$params.class->getValue()}{/if}">
        {$blockContent}
    </{$params.tag}>
</nav>