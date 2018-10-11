{assign var=id value=$params.id->getValue()|default:uniqid()}
{assign var=buttons value=false}
{assign var=stacked value=false}
{assign var=plain value=false}

{if isset($parentBlockParams.stacked)}
    {assign var=stacked value=$parentBlockParams.stacked->getValue()}
{/if}
{if isset($parentBlockParams.plain)}
    {assign var=plain value=$parentBlockParams.plain->getValue()}
{/if}
{if isset($parentBlockParams.buttons)}
    {assign var=buttons value=$parentBlockParams.buttons->getValue()}
{/if}
{if $buttons === false}
    <div class="
            {if $plain === false}
                custom-control custom-checkbox
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
                type="checkbox"
                id="{$id}"
                {if $params.name->hasValue()}name="{$params.name->getValue()}"{/if}
                {if $params.disabled->getValue() === true}disabled{/if}
                {if $params.required->getValue() === true}required{/if}
        >
        {if !empty($blockContent)}
            <label for="{$id}" class="{if $plain === false}custom-control-label{else}form-check-label{/if}">
                {$blockContent}
            </label>
        {/if}
    </div>
{else}
    <label class="btn btn-{$parentBlockParams.buttonVariant->getValue()} btn-{$parentBlockParams.size->getValue()}{if $params.disabled->getValue() === true} disabled{/if}"
        {if $params.itemprop->hasValue()}itemprop="{$params.itemprop->getValue()}"{/if}
        {if $params.itemscope->getValue() === true}itemscope {/if}
        {if $params.itemtype->hasValue()}itemtype="{$params.itemtype->getValue()}"{/if}
        {if $params.itemid->hasValue()}itemid="{$params.itemid->getValue()}"{/if}
    >
        <input
                id="{$id}"
                type="checkbox"
                {if $params.name->hasValue()}name="{$params.name->getValue()}"{/if}
                {if $params.required->getValue() === true}required{/if}
                class="{$params.class->getValue()}"
        >
        <span><span>{$blockContent}</span></span>
    </label>
{/if}
