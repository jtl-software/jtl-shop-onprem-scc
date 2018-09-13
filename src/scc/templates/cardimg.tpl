<img src="{$params.src->getValue()}"
     alt="{$params.alt->getValue()}"
     class="card-img {$params.class->getValue()}{if $params.bottom->getValue() === true} card-img-bottom{elseif $params.top->getValue() === true} card-img-top{/if}{if $params.fluid->getValue() === true} img-fluid{/if}"
     {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
     {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
 >