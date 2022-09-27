{{--
  Title: Advantages
  Description: Advantages section with items which tells you why you should choose us
  Category: layout
  Icon: yes-alt
  Keywords: advantages points section
  Mode: edit
  Align: full
  PostTypes: page post
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: false
--}}

@hasfields('advantages_repeater')

@php
  $repeaterRowsNumber = count(get_field('advantages_repeater'));
  $repeaterWrapperClass = '';

  if($repeaterRowsNumber == 3) {
    $repeaterWrapperClass = 'advantages__wrapper-3';
  } elseif($repeaterRowsNumber == 2) {
    $repeaterWrapperClass = 'advantages__wrapper-2';
  } else {
    $repeaterWrapperClass = '';
  }
  
@endphp
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