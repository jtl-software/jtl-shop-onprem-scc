<div class="card-footer
    {if $params.footerBgVariant->hasValue()} bg-{$params.footerBgVariant->getValue()}{/if}
    {if $params.footerTextVariant->hasValue()} text-{$params.footerBgVariant->getValue()}{/if}
    {if $params.footerBorderVariant->hasValue()} border-{$params.footerBorderVariant->getValue()}{/if}
"
    {if $params.id->hasValue()} id="{$params.id->getValue()}"{/if}
    {if $params.style->hasValue()} style="{$params.style->getValue()}"{/if}
>
    {$blockContent}
</div>