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
        @fields('pricing_repeater')  
          @php
            $title = get_sub_field('title');
            $benefits = get_sub_field('benefits');
            $icon = get_sub_field('icon');
            $cardFooter = get_sub_field('card_footer');
          @endphp
          @include('components.card', ['title' => $title, 'benefits' => $benefits, 'icon' => $icon, 'footer' => $cardFooter])
        @endfields        
    </div>
    
    @endhasfields

  </div>
</section>
@endfield