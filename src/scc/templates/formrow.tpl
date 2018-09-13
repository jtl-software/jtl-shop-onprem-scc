<{$params.tag->getValue()}
class="row {$params.class->getValue()}"
{if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
{if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}>
{$blockContent}
</{$params.tag->getValue()}>