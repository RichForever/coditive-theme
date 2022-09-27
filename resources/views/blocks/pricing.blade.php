{{--
  Title: Pricing
  Description: Pricing section shows packages with their advantages and prices
  Category: layout
  Icon: money-alt
  Keywords: pricing table benefits points section
  Mode: edit
  Align: full
  PostTypes: page post
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: false
--}}

@hasfields('advantages_repeater')
<section class="section {{ $block['classes'] }}" data-{{ $block['id'] }}>
  <div class="container">
    <div class="advantages__wrapper <?= esc_attr($repeaterWrapperClass); ?>">

      @fields('advantages_repeater')  
        <div class="advantages__item">
          @php
            $iconId = get_sub_field('icon');
          @endphp

          @hassub('icon')
          <figure class="icon icon--green">
            @image($iconId, 'full')
          </figure>
          @endsub
          

          @hassub('title')
          <h4 class="heading-3">
            @sub('title')            
            @hassub('subtitle')
              <span>@sub('subtitle')</span>
            @endsub
          </h4>
          @endsub

        </div>
      @endfields

      </div> 
  </div>          
</section>
@endhasfields

@hasfield('content')
<section class="section pricing">
  <div class="container">

    <div class="pricing__content"> 
      @field('content')   
    </div>

    @hasfields('pricing_repeater')
    <div class="pricing__cards card-container card-container--scrolled">
        <!-- didn't work so paste raw html here
        @include('components.card', ['some' => 'data']) -->
        @fields('pricing_repeater')  
        <div class="card">

            @hassub('icon')

            @php
              $iconId = get_sub_field('icon');
            @endphp
            <div class="card__icon">
              <figure>
                @image($iconId, 'thumbnail')
              </figure>
            </div>
            @endsub

            @hassub('title')
            <div class="card__header">
                <h3 class="heading-4">@sub('title')</h3>
            </div>
            @endsub

            @hassub('benefits')
            <div class="card__content">  
              <div class="list list--custom">
                @sub('benefits')
              </div>                    
            </div>
            @endsub

            @group('card_footer')
            <div class="card__footer">
              @hassub('price')
                <h4 class="heading-3">
                  @sub('price')
                  @hassub('price_subtitle')
                    <span>@sub('price_subtitle')</span>
                  @endsub                  
                </h4>
              @endsub
              @hassub('btn_label')
                <a href="#" class="button button--rounded-full button--stroked">@sub('btn_label')</a>
              @endsub              
            </div>
            @endgroup 

        </div>
        @endfields


    </div>
    @endhasfields

  </div>
</section>
@endfield