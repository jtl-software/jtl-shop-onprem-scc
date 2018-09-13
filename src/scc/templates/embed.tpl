<div class="embed-responsive embed-responsive-{$params.aspect->getValue()}">
    <{$params.type->getValue()}
        class="embed-responsive-item {$params.class->getValue()}"
        {if $params.src->hasValue()}src="{$params.src->getValue()}"{/if}
        {if $params.allowfullscreen->getValue() === true}allowfullscreen{/if}
        {if $params.loop->getValue() === true}loop{/if}
        {if $params.autoplay->getValue() === true}autoplay{/if}
        {if $params.autobuffer->getValue() === true}autobuffer{/if}
        {if $params.muted->getValue() === true}muted{/if}
        {if $params.controls->getValue() === true}controls{/if}
        {if $params.poster->hasValue()}poster="{$params.poster->getValue()}"{/if}
        {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
        {if $params.preload->hasValue()}preload="{$params.preload->getValue()}"{/if}
        {if $params.width->hasValue()}width="{$params.width->getValue()}"{/if}
        {if $params.height->hasValue()}height="{$params.height->getValue()}"{/if}
        {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
    >
    {$blockContent}
    </{$params.type->getValue()}>
</div>