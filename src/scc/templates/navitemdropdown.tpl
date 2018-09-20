<{$params.tag->getValue()}
    {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
    {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
    class="nav-item dropdown{if $params.class->hasValue()} {$params.class->getValue()}{/if}"
    >
    <a class="nav-link nav-link-custom
        {if $params.noCaret->getValue() === false} dropdown-toggle{/if}
        {if $params.disabled->getValue() === true} disabled{/if}"
        href="#"
        data-toggle="dropdown"
        role="button"
        aria-haspopup="true"
        aria-expanded="false"
    >
        {$params.text->getValue()}
    </a>
    <div class="dropdown-menu
        {if $params.right->getValue() === true} dropdown-menu-right{/if}
    ">
        {$blockContent}
    </div>
</{$params.tag->getValue()}>