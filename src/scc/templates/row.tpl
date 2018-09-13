{$class = "row {$params.class->getValue()}"}
{if $params.alignH->hasValue()}
    {$class = "{$class} justify-content-{$params.alignH->getValue()}"}
{/if}
{if $params.alignV->hasValue()}
    {$class = "{$class} align-items-{$params.alignV->getValue()}"}
{/if}

<{$params.tag->getValue()}
class="{$class}"
{if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
{if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}>
{$blockContent}
</{$params.tag->getValue()}>