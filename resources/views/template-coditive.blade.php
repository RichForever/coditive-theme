{{--
  Template Name: Coditive
--}}

@extends('layouts.app')

@section('content')
    <section class="section">
      <div class="container mx-auto text-center sm:text-left">
        <div class="flex items-center">
          <div>
            <h1>Lorem ipsum dolor sit amet consectetur</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sodales, leo at tempor varius, mauris neque fringilla elit, in tristique augue</p>
            <a href="#" class="button button--rounded button--filled button--has-shadow">Get Started</a>          
          </div>
          <div class="mt-10">
            <figure>
              <img src="@asset('images/illustration_main_lorem_ipsum.svg')" alt="">
            </figure>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container mx-auto text-center">
        <div>
          <img src="" alt="">
          <div>90+ <br> Users</div>
        </div>
        <div>
          <img src="" alt="">
          <div>90+ <br> Users</div>
        </div>
        <div>
          <img src="" alt="">
          <div>90+ <br> Users</div>
        </div> 
      </div>          
    </section>

    <section class="section">
      <div class="container mx-auto text-center">
        <h2>Choose Your Plan</h2>
        <p>Let's choose the package that is best for you and explore it happily and cheerfully.</p>
        <div class="card-container card-container--scrolled">
          @for ($i = 0; $i < 3; $i++)
            @include('components.card')
          @endfor



        </div>
      </div>
    </section>

    <!-- @include('partials.content-page') -->
@endsection
