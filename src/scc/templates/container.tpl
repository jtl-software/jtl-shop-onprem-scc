<{$params.tag->getValue()}
class="container{if $params.fluid->getValue() === true}-fluid{/if} {$params.class->getValue()}"
{if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
{if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}>
{$blockContent}
</{$params.tag->getValue()}>