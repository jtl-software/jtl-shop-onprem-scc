<{$params.tag->getValue()}
class="container{if $params.fluid->getValue() === true}-fluid{/if} {$params.class->getValue()}"
{if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
{if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
{if $params.itemprop->hasValue()}id="{$params.itemprop->getValue()}"{/if}
{if $params.itemscope->hasValue()}id="{$params.itemscope->getValue()}"{/if}
{if $params.itemtype->hasValue()}id="{$params.itemtype->getValue()}"{/if}>
{$blockContent}
</{$params.tag->getValue()}>