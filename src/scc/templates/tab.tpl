<{$params.tag} class="{$params.class->getValue()}" role="presentation"
    {if $params.id->hasValue()}id="label-{$params.id->getValue()}"{/if}
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
    {if $params.itemprop->hasValue()}itemprop="{$params.itemprop->getValue()}"{/if}
    {if $params.itemscope->getValue() === true}itemscope {/if}
    {if $params.itemtype->hasValue()}itemtype="{$params.itemtype->getValue()}"{/if}
    {if $params.itemid->hasValue()}itemid="{$params.itemid->getValue()}"{/if}
>
    <a class="nav-link{if $params.active->getValue() === true} active{/if}{if $params.disabled->getValue() === true} disabled{/if}"
       href="#tab-{$params.id->getValue()}"
       data-toggle="tab"
       role="tab"
       aria-controls="tab-{$params.id->getValue()}"
       id="tab-link-{$params.id->getValue()}"
    >
        {$params.title->getValue()}
    </a>
</{$params.tag}>

{$tmp = $parentSmarty->getTemplateVars('tabContents')|default:[]}
{$tmp[] = $blockContent}
{$x = $parentSmarty->assign('tabContents', $tmp)}
{$tmp = $parentSmarty->getTemplateVars('tabIDs')|default:[]}
{$tmp[] = $params.id->getValue()}
{$x = $parentSmarty->assign('tabIDs', $tmp)}