{*{if $params.variant->hasValue()}*}
    {*{assign var=class value=$params.class|cat:' btn-'|cat:$params.variant}*}
{*{else}*}
    {*{assign var=class value=$params.class}*}
{*{/if}*}
{*<button*}
    {*type="{$params.type}"*}
    {*class="{$class}{if $params.size->hasValue()} btn-{$params.size}{/if}"*}

    {*{if $params.style->hasValue()}style="{$params.style}"{/if}*}
    {*{if $params.disabled->getValue() === true}disabled{/if}>*}
{*{$blockContent}*}
{*</button>*}

<div class="modal {$params.class->getValue()}" tabindex="-1" role="dialog"{if $params.id->hasValue()} id="{$params.id->getValue()}"{/if}
    {if $params.itemprop->hasValue()}itemprop="{$params.itemprop->getValue()}"{/if}
    {if $params.itemscope->getValue() === true}itemscope {/if}
    {if $params.itemtype->hasValue()}itemtype="{$params.itemtype->getValue()}"{/if}
    {if $params.itemid->hasValue()}itemid="{$params.itemid->getValue()}"{/if}
>
    <div class="modal-dialog{if $params.centered->getValue() === true} modal-dialog-centered{/if}" role="document">
        <div class="modal-content">
            <div class="modal-header">
                {if $params.title->hasValue()}<h5 class="modal-title">{$params.title->getValue()}</h5>{/if}
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {$blockContent}
            </div>
            {if $params.footer->hasValue()}
            <div class="modal-footer">
                {$params.footer->getValue()}
            </div>
            {/if}
        </div>
    </div>
</div>