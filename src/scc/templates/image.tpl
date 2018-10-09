{assign var=rounded value=''}
{if $params.rounded->getValue() !== false}
    {if $params.rounded->getValue() === true}
        {assign var=rounded value='rounded'}
    {else}
        {assign var=rounded value='rounded-'|cat:$params.rounded->getValue()}
    {/if}
{/if}

<img
    src="{$params.src->getValue()}"
    class="{$params.class->getValue()} {$rounded}
    {if $params.fluid->getValue() === true} img-fluid{/if}
    {if $params.fluidGrow->getValue() === true} img-fluid w-100{/if}
    {if $params.thumbnail->getValue() === true} img-thumbnail{/if}
    {if $params.left->getValue() === true} float-left{/if}
    {if $params.right->getValue() === true} float-right{/if}
    {if $params.center->getValue() === true} mx-auto d-block{/if}
    "
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
    {if $params.alt->hasValue()}alt="{$params.alt->getValue()}"{/if}
    {if $params.width->hasValue()}width="{$params.width->getValue()}"{/if}
    {if $params.height->hasValue()}height="{$params.height->getValue()}"{/if}
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
>