<div class="card">
    @php
        $iconId = $icon;
        $footerPrice = $footer['price'];
        $footerSubPrice = $footer['price_subtitle'];
        $footerBtnLabel = $footer['btn_label']
    @endphp

    @notempty($iconId)
    <div class="card__icon">
        <figure>
        @image($iconId, 'thumbnail')
        </figure>
    </div>
    @endnotempty

    @notempty($title)
    <div class="card__header">
        <h3 class="heading-4">{{ $title }}</h3>
    </div>
    @endnotempty

    @notempty($benefits)
    <div class="card__content"> 
        <div class="list list--custom">
            {!! $benefits !!}
        </div>         
    </div>
    @endnotempty

    @notempty($footerPrice || $footerSubPrice || $footerBtnLabel)
    <div class="card__footer">
        <h4 class="heading-3">
            @notempty($footerPrice)
                {{ $footerPrice }} 
            @endnotempty
            @notempty($footerSubPrice)
                <span>{{ $footerSubPrice }}</span>
            @endnotempty
        </h4>

        @notempty($footerBtnLabel)
            <a href="#" class="button button--rounded-full button--stroked">{{ $footerBtnLabel }}</a>
        @endnotempty
    </div>   
    @endnotempty
                   
</div>