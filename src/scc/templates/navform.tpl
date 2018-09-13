<li class="nav-item">
    <form class="form-inline {$params.class->getValue()}"
          {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
          {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}>
        {$blockContent}
    </form>
</li>