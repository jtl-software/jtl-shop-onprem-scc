<{$params.tag->getValue()}
    class="{if $params.deck->getValue() === true}card-deck{elseif $params.columns->getValue() === true}card-columns{else}card-group{/if} {$params.class->getValue()}"
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
>
{$blockContent}
</{$params.tag->getValue()}>