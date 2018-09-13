{assign var=id value=$params.id->getValue()|default:uniqid()}
<{$params.tag} class="media {$params.class->getValue()}"
{if $params.id->hasValue()}id="label-{$params.id->getValue()}"{/if}
{if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
>
    {$blockContent}
</{$params.tag}>