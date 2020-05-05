@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-lg-6">
        <!-- top left row -->
        <div class="row">
          <div class="col-md-5">
            <img class="logo mx-auto d-block" src="{{ asset('assets/img/logo.png') }}" alt="logo" />
          </div>

          <div class="col-md-7">
            <h5 class="mx-auto d-block">Welcome to Commonwealth Catering!</h5>

            <p class="mx-auto d-block">We bring over 30 years of catering experience to your next event!
              Whether you are looking for a boxed lunch, personal chef,
              corporate event, or wedding reception, Commonwealth Catering has
              the resume to fulfill your needs. Our mission is to provide food,
              service,  and insight to help make your next event a memorable one.
              We specialize in  fresh and local ingredients to insure the highest
              quality for your menu. Our seasoned staff work beyond reproach
              to accommodate your guests.</p>
          </div>
        </div> <!-- end top-left row -->

        <!-- start bottom-left row -->
        <div class="row">
          <div class="col-12">
            <img class="portrait rounded mx-auto d-block" src="{{ asset('assets/img/portrait.jpg') }}" alt="portrait" />
          </div>
        </div>
        <!-- close bottom-left row -->
      </div>

      <div class="col-lg-6">
        <center>
        <h2>Check us out on Facebook!</h2>
        <div class="fb-page" data-href="https://www.facebook.com/chefseanhaggerty" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/chefseanhaggerty" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/chefseanhaggerty">Commonwealth Catering LLC</a></blockquote></div>
      </center>
      </div>
  </div>
</div>

@endsection
