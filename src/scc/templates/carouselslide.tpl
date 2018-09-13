<div
    class="carousel-item {$params.class->getValue()}{if $params.active->getValue() === true} active{/if}"
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
>
    {if $params.imgSrc->hasValue()}
        <img class="d-block w-100" src="{$params.imgSrc->getValue()}" alt="{$params.imgAlt->getValue()}">
        {if $params.caption->hasValue()}
        <div class="carousel-caption d-none d-md-block">
            <{$params.captionTag->getValue()}>
                {$params.caption->getValue()}
            </{$params.captionTag->getValue()}>
            <{$params.captionTextTag->getValue()}>
                {$params.captionText->getValue()}
            </{$params.captionTextTag->getValue()}>
        </div>
        {/if}
    {/if}
</div>
{$tmp = $parentSmarty->getTemplateVars('carouselSlides')|default:0}
{assign var=tmp value=$tmp+1}
{$x = $parentSmarty->assign('carouselSlides', $tmp)}