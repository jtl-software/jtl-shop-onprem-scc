{*form-group will render a <fieldset> with <legend> if the label-for prop is not set.*}
{*If an input ID is provided to the label-for prop, then a <div> with <label> will be rendered.*}
{assign var=id value=$params.id->getValue()|default:uniqid()}
{assign var=breakPoint value=$params.breakpoint->getValue()}
{if $params.labelFor->hasValue()}
    <div id="{$id}" role="group" aria-labelledby="form-group-label-{$id}" class="form-group">
        {if $params.horizontal->getValue() === true}
            <div class="form-row">
        {/if}
        <label id="form-group-label-{$id}" for="{$params.labelFor->getValue()}" class="col-form-label pt-0{if $params.horizontal->getValue() === true} col-{$breakPoint}-{$params.labelCols->getValue()}{/if}{if $params.labelSize->hasValue()} col-form-label-{$params.labelSize->getValue()}{/if}">
            {$params.label->getValue()}
        </label>
        <div class="{if $params.horizontal->getValue() === true}col-{$breakPoint}-{12 - $params.labelCols->getValue()}{/if}">
            {$blockContent}
            {if $params.description->hasValue()}
                <small id="form-group-description-{$id}" class="form-text text-muted">{$params.description->getValue()}</small>
            {/if}
        </div>
        {if $params.horizontal->getValue() === true}
            </div>
        {/if}
    </div>
{else}
    <fieldset
        role="group"
        class="form-group {$params.class->getValue()}"
        id="{$id}"
        {if $params.label->hasValue()}aria-labelledby="label-{$id}" {/if}
    >
        {if $params.horizontal->getValue() === true}
            <div class="form-row">
        {/if}
            {if $params.label->hasValue()}
                <legend
                        id="form-group-label-{$id}"
                        class="col-form-label{if $params.horizontal->getValue() === true} col-{$breakPoint}-{$params.labelCols->getValue()}{/if}{if $params.labelSize->hasValue()} col-form-label-{$params.labelSize->getValue()}{/if} pt-0">
                    {$params.label->getValue()}
                </legend>
            {/if}
            <div class="{if $params.horizontal->getValue() === true}col-{$breakPoint}-{12 - $params.labelCols->getValue()}{/if}">
                {$blockContent}
                {if $params.description->hasValue()}
                    <small id="form-group-description-{$id}" class="form-text text-muted">{$params.description->getValue()}</small>
                {/if}
            </div>
        {if $params.horizontal->getValue() === true}
            </div>
        {/if}
    </fieldset>
{/if}