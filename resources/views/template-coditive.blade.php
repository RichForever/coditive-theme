{{--
  Template Name: Coditive
--}}

@extends('layouts.app')

@section('content')
    <section class="section">
      <div class="container mx-auto text-center md:text-left">
        <div class="md:flex md:items-center">
          <div class="md:w-1/2">
            <h1>Lorem ipsum dolor sit amet consectetur</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sodales, leo at tempor varius, mauris neque fringilla elit, in tristique augue</p>
            <a href="#" class="button button--rounded button--filled has-shadow has-shadow--green">Get Started</a>          
          </div>
          <div class="mt-10 md:mt-0 md:w-1/2">
            <figure>
              <img src="@asset('images/illustration_main_lorem_ipsum.svg')" alt="">
            </figure>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container mx-auto text-center md:text-left">
        <div class="advantages">
          @for ($i = 0; $i < 3; $i++)
          <div class="advantages__item">
            <figure class="icon icon--green">
              <img src="@asset('images/icon-user.svg')" alt="">
            </figure>
            <h4 class="heading-3" style="margin-bottom: 0;">
              90+
              <span class="block md:flex">Users</span>
            </h4>
          </div>
          @endfor
          </div> 
      </div>          
    </section>

    <section class="section">
      <div class="container mx-auto text-center">
        <div class="md:w-2/3 mx-auto">    
          <h2>Choose Your Plan</h2>
          <p>Let's choose the package that is best for you and explore it happily and cheerfully.</p>
        </div>
        <div class="card-container card-container--scrolled">
          @for ($i = 0; $i < 3; $i++)
            @include('components.card')
          @endfor
        </div>
      </div>
    </section>

    <!-- @include('partials.content-page') -->
@endsection
