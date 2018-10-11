{assign var=id value=$params.id->getValue()|default:uniqid()}
<div
    {*@todo:*}
    {*data-toggle="buttons"*}
    role="group"
    class="{$params.class->getValue()}{if $params.buttons->getValue() === true} btn-group-toggle btn-group{if $params.stacked->getValue() === true}-vertical{/if} btn-group-{$params.size->getValue()}{/if}"
    id="{$id}"
    {if $params.itemprop->hasValue()}itemprop="{$params.itemprop->getValue()}"{/if}
    {if $params.itemscope->getValue() === true}itemscope {/if}
    {if $params.itemtype->hasValue()}itemtype="{$params.itemtype->getValue()}"{/if}
    {if $params.itemid->hasValue()}itemid="{$params.itemid->getValue()}"{/if}
>
    {$blockContent}
</div>