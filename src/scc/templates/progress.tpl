<div class="progress"
    {if $params.style->hasValue() || $params.height->hasValue()}style="{$params.style->getValue()}{if $params.height->hasValue()}; height: {$params.height->getValue()}{/if}" {/if}
    {if $params.id->hasValue()}id="{$params.id->getValue()}" {/if}
    {if $params.class->hasValue() || $params.height->hasValue()}class="{$params.class->getValue()}" {/if}
    >
    <div class="progress-bar{if $params.type->hasValue()} bg-{$params.type->getValue()}{/if}
         {if $params.striped->getValue() === true} progress-bar-striped{/if}
         {if $params.animated->getValue() === true} progress-bar-animated{/if}"
         role="progressbar"
         style="width: {$params.now->getValue()}%"
         aria-valuenow="{$params.now->getValue()}"
         aria-valuemin="{$params.min->getValue()}"
         aria-valuemax="{$params.max->getValue()}">
        {if $params.title->hasValue()}{$params.title->getValue()}{/if}
    </div>
</div>