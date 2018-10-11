<ul role="menubar"
    aria-disabled="false"
    aria-label="{$params.ariaLabel->getValue()}"
    class="pagination pagination-{$params.size->getValue()} justify-content-{$params.align->getValue()}"
    {if $params.itemprop->hasValue()}itemprop="{$params.itemprop->getValue()}"{/if}
    {if $params.itemscope->getValue() === true}itemscope {/if}
    {if $params.itemtype->hasValue()}itemtype="{$params.itemtype->getValue()}"{/if}
    {if $params.itemid->hasValue()}itemid="{$params.itemid->getValue()}"{/if}
>
    <li role="none presentation" class="page-item disabled" aria-hidden="true">
        <span class="page-link"></span>
    </li>
</ul>