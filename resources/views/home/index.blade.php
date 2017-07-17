@extends('templates.home')

@section('content')
  <!-- Intro Header -->
  <header class="intro">
    <div class="intro-body">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h1 class="brand-heading">CSE Revue</h1>
            <p class="intro-text">
              Meme Wars<br />
              Get Tickets Now
            </p>
            <br />
            <a href="#about" class="btn btn-circle page-scroll">
              <i class="fa fa-angle-double-down animated"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
    <section id="featurette" class="container content-section text-center">
      <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="embed-responsive embed-responsive-16by9"> 
                    <iframe width="560" height="315" class="embed-responsive-item"  src="https://www.youtube.com/embed/F2exflhQxyA" frameborder="0" allowfullscreen></iframe>              
                </div>
            </div>
        </div>
      </div>
    </section>

  <section id="about" class="content-section text-center">
    <div class="about-section">
      <div class="container">
        <div class="col-lg-8 col-lg-offset-2">
          <h2>What is CSE Revue?</h2>
          <p>CSE Revue is a meme!</p>
        </div>
      </div>
    </div>
  </section>
  
  {{-- @include('includes.sponsors') --}}
@endsection
