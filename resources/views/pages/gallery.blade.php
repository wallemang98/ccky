@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-6 gallery">
        <a class="lightbox" href="#gallery1">
            <img class="galleryPhoto mx-auto d-block" src="{{ asset('assets/img/gallery1.jpg') }}" alt="gallery1" />
        </a>
        <div class="lightbox-target" id="gallery1">
            <img class="mx-auto d-block" src="{{ asset('assets/img/gallery1.jpg') }}" />
          <a class="lightbox-close" href="#smallgallery1"></a>
        </div>
    </div> <!-- closing col gallery1 -->

    <div class="col-xs-12 col-md-6 gallery">
      <a class="lightbox" href="#gallery2">
          <img class="galleryPhoto mx-auto d-block" src="{{ asset('assets/img/gallery2.jpg') }}" alt="gallery2" />
      </a>
      <div class="lightbox-target" id="gallery2">
          <img class="mx-auto d-block" src="{{ asset('assets/img/gallery2.jpg') }}" />
        <a class="lightbox-close" href="#smallgallery2"></a>
      </div>
    </div><!-- closing col gallery2 -->
  </div> <!-- closing row -->

  <div class="row">
    <br>
    <br>
    <div class="col-xs-12 col-md-6 gallery">
        <a class="lightbox" href="#gallery3">
            <img class="galleryPhoto mx-auto d-block" src="{{ asset('assets/img/gallery3.jpg') }}" alt="gallery3" />
        </a>
        <div class="lightbox-target" id="gallery3">
            <img class="mx-auto d-block" src="{{ asset('assets/img/gallery3.jpg') }}" />
          <a class="lightbox-close" href="#smallgallery3"></a>
        </div>
    </div> <!-- closing col gallery3 -->

    <div class="col-xs-12 col-md-6 gallery">
      <a class="lightbox" href="#gallery4">
          <img class="galleryPhoto mx-auto d-block" src="{{ asset('assets/img/gallery4.jpg') }}" alt="gallery4" />
      </a>
      <div class="lightbox-target" id="gallery4">
          <img class="mx-auto d-block" src="{{ asset('assets/img/gallery4.jpg') }}" />
        <a class="lightbox-close" href="#smallgallery4"></a>
      </div>
    </div><!-- closing col gallery4 -->
  </div> <!-- closing row -->

  <div class="row">
    <div class="col-xs-12 col-md-6 gallery">
        <a class="lightbox" href="#gallery5">
            <img class="galleryPhoto mx-auto d-block" src="{{ asset('assets/img/gallery5.jpg') }}" alt="gallery5" />
        </a>
        <div class="lightbox-target" id="gallery5">
            <img class="mx-auto d-block" src="{{ asset('assets/img/gallery5.jpg') }}" />
          <a class="lightbox-close" href="#smallgallery5"></a>
        </div>
    </div> <!-- closing col gallery5 -->

    <div class="col-xs-12 col-md-6 gallery">
      <a class="lightbox" href="#gallery6">
          <img class="galleryPhoto mx-auto d-block" src="{{ asset('assets/img/gallery6.jpg') }}" alt="gallery6" />
      </a>
      <div class="lightbox-target" id="gallery6">
          <img class="mx-auto d-block" src="{{ asset('assets/img/gallery6.jpg') }}" />
        <a class="lightbox-close" href="#smallgallery6"></a>
      </div>
    </div><!-- closing col gallery6 -->
  </div> <!-- closing row -->

  <div class="row">
    <br>
    <br>
    <div class="col-xs-12 col-md-6 gallery">
        <a class="lightbox" href="#gallery7">
            <img class="galleryPhoto mx-auto d-block" src="{{ asset('assets/img/gallery7.jpg') }}" alt="gallery7" />
        </a>
        <div class="lightbox-target" id="gallery7">
            <img class="mx-auto d-block" src="{{ asset('assets/img/gallery7.jpg') }}" />
          <a class="lightbox-close" href="#smallgallery7"></a>
        </div>
    </div> <!-- closing col gallery7 -->

    <div class="col-xs-12 col-md-6 gallery">
      <a class="lightbox" href="#gallery8">
          <img class="galleryPhoto mx-auto d-block" src="{{ asset('assets/img/gallery8.jpg') }}" alt="gallery8" />
      </a>
      <div class="lightbox-target" id="gallery8">
          <img class="mx-auto d-block" src="{{ asset('assets/img/gallery8.jpg') }}" />
        <a class="lightbox-close" href="#smallgallery8"></a>
      </div>
    </div><!-- closing col gallery4 -->
  </div> <!-- closing row -->

</div><!-- closing container -->
@endsection
