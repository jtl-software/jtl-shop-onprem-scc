<{$params.tag->getValue()}
{if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
{if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
class="nav-item"
>
    <{$params.routerTag->getValue()} class="nav-link
    {if $params.active->getValue() === true} {$params.activeClass->getValue()}{/if}
    {if $params.disabled->getValue() === true} disabled{/if}
    {if $params.nofollow->getValue() === true} rel="nofollow"{/if}
    {if $params.title->hasValue() === true} title="{$params.title->getValue()}"{/if}
    " target="{$params.target->getValue()}"
    {if $params.href->hasValue()}href="{$params.href->getValue()}"{/if}
    >
    {$blockContent}
    </{$params.routerTag->getValue()}>
</{$params.tag->getValue()}>