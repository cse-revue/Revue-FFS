@extends('templates.home')

@section('content')
  <!-- Intro Header -->
  <header class="intro" style="margin-top: 50px">
    <div class="intro-body">
      <div class="container">
        <div class="row">
          <div id="intro-div" class="col-xs-10 col-md-8 col-md-offset-2">
            <h1 class="brand-heading">CSE Revue</h1>
            <div class= "intro-box">
            <p class="intro-text">The Source Awakens</p>
            <p class="intro-text">Get Tickets Now</p>
            </div>
{{--             <a href="#about" class="btn btn-circle page-scroll">
              <i class="fa fa-angle-double-down animated"></i>
            </a> --}}
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="content-section text-center">
    <div class="about-section">
      <div class="container">
        <div class="col-lg-8 col-lg-offset-2">
          <h2>What is CSE Revue?</h2>
          <p>The Computer Science and Engineering (CSE) Revue is a live comed sketch show held during September at the University of New South Wales (UNSW). Produced and directed by members of the society, the show serves to highlight the technical and creative talents of UNSW studnets, as well as an opportunity for students to further develop their university experience.</p>
        </div>
      </div>
    </div>
  </section>

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
  
  @include('includes.sponsors')
@endsection
