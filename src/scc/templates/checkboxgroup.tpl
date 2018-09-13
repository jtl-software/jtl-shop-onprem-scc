{*@todo: same as radiogroup.tpl*}
{assign var=id value=$params.id->getValue()|default:uniqid()}
<div
    role="group"
    class="{$params.class->getValue()}{if $params.buttons->getValue() === true} btn-group-toggle btn-group{if $params.stacked->getValue() === true}-vertical{/if} btn-group-{$params.size->getValue()}{/if}"
    id="{$id}"
>
    {$blockContent}
</div>