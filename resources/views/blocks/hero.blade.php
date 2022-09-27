{{--
  Title: Hero
  Description: Hero section with text and image
  Category: layout
  Icon: align-right
  Keywords: hero section
  Mode: edit
  Align: full
  PostTypes: page post
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: false
--}}

<section class="section {{ $block['classes'] }}" data-{{ $block['id'] }}>
  <div class="container">
    <div class="hero__wrapper">
      
    <div class="hero__content">
        @hasfield('content')
          @field('content')
        @endfield   

        @group('button')
          @hassub('url')
            <a href="@sub('url')" class="button button--rounded button--filled has-shadow has-shadow--green">
              @sub('label')
            </a>
          @endsub
        @endgroup
      </div>

      @hasfield('image')
      <div class="hero__image">
        <figure>
          @image('image', 'large-width')
        </figure>
      </div>
      @endfield

    </div>
  </div>
</section>