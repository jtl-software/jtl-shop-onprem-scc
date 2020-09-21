{assign var=rounded value=''}
{assign var=useWebP value=$params.webp->getValue() === true && \JTL\Media\Image::hasWebPSupport()}
{if $params.rounded->getValue() !== false}
    {if $params.rounded->getValue() === true}
        {assign var=rounded value='rounded'}
    {else}
        {assign var=rounded value='rounded-'|cat:$params.rounded->getValue()}
    {/if}
{/if}

{if {$params.src->getValue()}|strpos:'keinBild.gif' !== false}
<img class="{$params.class->getValue()} {$rounded} {if $params['fluid-grow']->getValue() === true} img-fluid w-100{/if}"
     height="{if $params.height->hasValue()}{$params.height->getValue()}{elseif $params.sizes->hasValue()}{$params.sizes->getValue()}{else}auto{/if}"
     width="{if $params.width->hasValue()}{$params.width->getValue()}{elseif $params.sizes->hasValue()}{$params.sizes->getValue()}{else}auto{/if}"
     {if $params.alt->hasValue()}alt="{$params.alt->getValue()}"{/if}
     src="{$params.src->getValue()}">
{else}
    {*if an image contains CSS-class "lazyload" the js-lib "lazysize" changes srcset. therefor we check against "lazy" parameter.
    loading gif is set as source if "lazy" is active to save bandwidth.

    https://github.com/aFarkas/lazysizes#modern-transparent-srcset-pattern
    https://ivopetkov.com/b/lazy-load-responsive-images/
    *}
    {if $useWebP}
    <picture>
        <source
                {if $params.srcset->hasValue()}
                    {if $params.lazy->getValue() === true}data-{/if}srcset="{$params.srcset->getValue()|regex_replace:"/\.(?i)(jpg|jpeg|png)/":".webp"}"
                {else}
                    {if $params.lazy->getValue() === true}data-{/if}srcset="{$params.src->getValue()|regex_replace:"/\.(?i)(jpg|png)/":".webp"}"
                {/if}
                {if $params.sizes->hasValue()}{if $params.sizes->getValue() === 'auto'}data-{/if}sizes="{$params.sizes->getValue()}"{/if}
                type="image/webp">
    {/if}
        <img
                src="{$params.src->getValue()}"
                {if $params.lazy->getValue() === true}
                    srcset="data:image/gif;base64,R0lGODlhEAAQAPQAAP///1VVVfr6+np6eqysrFhYWG5ubuPj48TExGNjY6Ojo5iYmOzs7Lq6utjY2ISEhI6OjgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAAFUCAgjmRpnqUwFGwhKoRgqq2YFMaRGjWA8AbZiIBbjQQ8AmmFUJEQhQGJhaKOrCksgEla+KIkYvC6SJKQOISoNSYdeIk1ayA8ExTyeR3F749CACH5BAkKAAAALAAAAAAQABAAAAVoICCKR9KMaCoaxeCoqEAkRX3AwMHWxQIIjJSAZWgUEgzBwCBAEQpMwIDwY1FHgwJCtOW2UDWYIDyqNVVkUbYr6CK+o2eUMKgWrqKhj0FrEM8jQQALPFA3MAc8CQSAMA5ZBjgqDQmHIyEAIfkECQoAAAAsAAAAABAAEAAABWAgII4j85Ao2hRIKgrEUBQJLaSHMe8zgQo6Q8sxS7RIhILhBkgumCTZsXkACBC+0cwF2GoLLoFXREDcDlkAojBICRaFLDCOQtQKjmsQSubtDFU/NXcDBHwkaw1cKQ8MiyEAIfkECQoAAAAsAAAAABAAEAAABVIgII5kaZ6AIJQCMRTFQKiDQx4GrBfGa4uCnAEhQuRgPwCBtwK+kCNFgjh6QlFYgGO7baJ2CxIioSDpwqNggWCGDVVGphly3BkOpXDrKfNm/4AhACH5BAkKAAAALAAAAAAQABAAAAVgICCOZGmeqEAMRTEQwskYbV0Yx7kYSIzQhtgoBxCKBDQCIOcoLBimRiFhSABYU5gIgW01pLUBYkRItAYAqrlhYiwKjiWAcDMWY8QjsCf4DewiBzQ2N1AmKlgvgCiMjSQhACH5BAkKAAAALAAAAAAQABAAAAVfICCOZGmeqEgUxUAIpkA0AMKyxkEiSZEIsJqhYAg+boUFSTAkiBiNHks3sg1ILAfBiS10gyqCg0UaFBCkwy3RYKiIYMAC+RAxiQgYsJdAjw5DN2gILzEEZgVcKYuMJiEAOwAAAAAAAAAAAA=="
                    {if $params.srcset->hasValue()}
                        data-srcset="{$params.srcset->getValue()}"
                    {else}
                        data-srcset="{$params.src->getValue()}"
                    {/if}
                {else}
                    srcset="{$params.srcset->getValue()}"
                {/if}
                {if $params.sizes->hasValue()}{if $params.sizes->getValue() === 'auto'}data-{/if}sizes="{$params.sizes->getValue()}"{/if}
                class="{$params.class->getValue()} {$rounded}
                {if $params.fluid->getValue() === true} img-fluid{/if}
                {if $params['fluid-grow']->getValue() === true} img-fluid w-100{/if}
                {if $params.thumbnail->getValue() === true} img-thumbnail{/if}
                {if $params.left->getValue() === true} float-left{/if}
                {if $params.right->getValue() === true} float-right{/if}
                {if $params.center->getValue() === true} mx-auto d-block{/if}
                {if $params.lazy->getValue() === true} lazyload{/if}"
                {if $params.id->hasValue()}id="{$params.id->getValue()}"{/if}
                {if $params.title->hasValue()}title="{$params.title->getValue()}"{/if}
                {if $params.alt->hasValue()}alt="{$params.alt->getValue()}"{/if}
                {if $params.width->hasValue()}width="{$params.width->getValue()}"{/if}
                {if $params.height->hasValue()}height="{$params.height->getValue()}"{/if}
                {if $params.style->hasValue()}style="{$params.style->getValue()}"{/if}
                {if $params.itemprop->hasValue()}itemprop="{$params.itemprop->getValue()}"{/if}
                {if $params.itemscope->getValue() === true}itemscope {/if}
                {if $params.itemtype->hasValue()}itemtype="{$params.itemtype->getValue()}"{/if}
                {if $params.itemid->hasValue()}itemid="{$params.itemid->getValue()}"{/if}
                {if $params.role->hasValue()}role="{$params.role->getValue()}"{/if}
                {if $params.aria->hasValue()}
                    {foreach $params.aria->getValue() as $ariaKey => $ariaVal} aria-{$ariaKey}="{$ariaVal}" {/foreach}
                {/if}
                {if $params.data->hasValue()}
                    {foreach $params.data->getValue() as $dataKey => $dataVal} data-{$dataKey}="{$dataVal}" {/foreach}
                {/if}
        >
    {if $useWebP}
    </picture>
    {/if}
{/if}
