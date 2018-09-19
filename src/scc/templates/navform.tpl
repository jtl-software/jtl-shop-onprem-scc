<li class="nav-item">
    <form class="form-inline {$params.class->getValue()}"
        {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
        {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
        {if $params.action->hasValue()}action="{$params.action->getValue()}"{/if}
        {if $params.method->hasValue()}method="{$params.method->getValue()}"{/if}>
    {$blockContent}
    </form>
</li>