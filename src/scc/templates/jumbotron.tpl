<{$params.tag}
    class="jumbotron{if $params.class->hasValue()} {$params.class->getValue()}{/if}
    {if $params.textVariant->hasValue()} text-{$params.textVariant->getValue()}{/if}
    {if $params.bgVariant->hasValue()} bg-{$params.bgVariant->getValue()}{/if}
    {if $params.borderVariant->hasValue()} border border-{$params.borderVariant->getValue()}{/if}
"
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}>
{if $params.header->hasValue()}
    <{$params.headerTag} class="display-4">
        {$params.header->getValue()}
    </{$params.headerTag}>
{/if}
{if $params.lead->hasValue()}
    <{$params.leadTag} class="lead">
    {$params.lead->getValue()}
    </{$params.leadTag}>
{/if}
{$blockContent}
</{$params.tag}>