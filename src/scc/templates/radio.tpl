{assign var=id value=$params.id->getValue()|default:uniqid()}
{if isset($parentBlockParams.stacked)}
    {assign var=stacked value=$parentBlockParams.stacked->getValue()}
{else}
    {assign var=stacked value=false}
{/if}
{if isset($parentBlockParams.plain)}
    {assign var=plain value=$parentBlockParams.plain->getValue()}
{else}
    {assign var=plain value=false}
{/if}
{if isset($parentBlockParams.buttons)}
    {assign var=buttons value=$parentBlockParams.buttons->getValue()}
{else}
    {assign var=buttons value=false}
{/if}
{if $buttons === false}
    <div class="
        {if $plain === false}
            custom-control custom-radio
            {if $stacked === false} custom-control-inline{/if}
        {else}
            form-check{if $stacked === false} form-check-inline{/if}
        {/if}"
        {if $params.itemprop->hasValue()}itemprop="{$params.itemprop->getValue()}"{/if}
        {if $params.itemscope->getValue() === true}itemscope {/if}
        {if $params.itemtype->hasValue()}itemtype="{$params.itemtype->getValue()}"{/if}
        {if $params.itemid->hasValue()}itemid="{$params.itemid->getValue()}"{/if}
    >
        <input
            class="{if $plain === false}custom-control-input{else}form-check-input{/if} {$params.class->getValue()}"
            type="radio"
            id="{$id}"
            {if $params.name->hasValue()}name="{$params.name->getValue()}"{/if}
            {if $params.role->hasValue()}role="{$params.role->getValue()}"{/if}
            {if $params.aria->hasValue()}{foreach $params.aria->getValue() as $ariaKey => $ariaVal}aria-{$ariaKey}="{$ariaVal}"{/foreach}{/if}
            {if $params.data->hasValue()}{foreach $params.data->getValue() as $dataKey => $dataVal}data-{$dataKey}="{$dataVal}"{/foreach}{/if}
            {if $params.value->hasValue()}value="{$params.value->getValue()}"{/if}
            {if $params.disabled->getValue() === true}disabled{/if}
        >
        {if !empty($blockContent)}
            <label for="{$id}" class="{if $plain === false}custom-control-label{else}form-check-label{/if}">
                {$blockContent}
            </label>
        {/if}
    </div>
{else}
    <label
        class="btn btn-{$parentBlockParams.buttonVariant->getValue()} btn-{$parentBlockParams.size->getValue()}{if $params.disabled->getValue() === true} disabled{/if}"
        {if $params.itemprop->hasValue()}itemprop="{$params.itemprop->getValue()}"{/if}
        {if $params.itemscope->getValue() === true}itemscope {/if}
        {if $params.itemtype->hasValue()}itemtype="{$params.itemtype->getValue()}"{/if}
        {if $params.itemid->hasValue()}itemid="{$params.itemid->getValue()}"{/if}
    >
        <input
            autocomplete="off"
            id="{$id}"
            type="radio"
            {if $params.name->hasValue()}name="{$params.name->getValue()}"{/if}
            {if $params.role->hasValue()}role="{$params.role->getValue()}"{/if}
            {if $params.aria->hasValue()}{foreach $params.aria->getValue() as $ariaKey => $ariaVal}aria-{$ariaKey}="{$ariaVal}"{/foreach}{/if}
            {if $params.data->hasValue()}{foreach $params.data->getValue() as $dataKey => $dataVal}data-{$dataKey}="{$dataVal}"{/foreach}{/if}
            class=""
            {if $params.value->hasValue()}value="{$params.value->getValue()}"{/if}
        >
        <span><span>{$blockContent}</span></span>
    </label>
{/if}
