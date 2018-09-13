<{$params.tag}
    class="{$params.class->getValue()}{if $params.pills->getValue() === true} nav-pills{/if}"
    role="tablist"
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
    {if $params.style->hasValue()}style="{$params.style}"{/if}>
{$blockContent}
</{$params.tag}>
{*Content:<br>*}
{*{$parentSmarty->getTemplateVars('tabContents')|var_dump}*}
{*IDs:<br>*}
{*{$parentSmarty->getTemplateVars('tabIDs')|var_dump}*}

<div class="tab-content" id="myTabContent">
    {foreach $tabContents as $i => $tab}
        <div class="tab-pane fade{if $tab@index === 0} show active{/if}"
             id="tab-{$tabIDs[$i]}"
             role="tabpanel"
             aria-labelledby="tab-link-{$tabIDs[$i]}">
            {$tab}
        </div>
    {/foreach}
</div>
