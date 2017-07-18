@extends('templates.home')

@section('title')
    @parent - FAQ's
@endsection

@section('content')
<!--	<div class="container">
    <div class="row">

    <div class="span10 offset1" id="main-title">
        <h2>FAQ&nbsp;</h2> 
    </div>
    </div> 

    <div class="row">

    <div class="span10 offset1" id="main-content"> -->
    
<header class="faq">
  <!--Script file to toggle text display and arrow rotation-->
  <script>
    function toggleDisplay(){
      //dropdown answer text display toggled
      $('.dropdown-answer').toggle(); 
      
      //drop down arrow rotates when clicked - delete if only default dropdown arrow is needed
      if ( $('.dropdown-arrow').css("transform") != 'none'){
        $('.dropdown-arrow').css("transform", "none");
      }
      else {
        $('.dropdown-arrow').css("transform", "rotate(270deg)");
      }
    }           
  </script>
  <div class="faq-body">
    <div class="container">
      <div class="row">
        <div class="col-md-1"> </div>
        <div class="col-md-7">
          <h1 style="color: white;">FAQ / Contact Us </h1>
        </div>        
        <div class="row">
          <div class="col-md-1"> </div>
          <div class="col-md-7">
            <div id="hBox">
              <h1 align="center">FAQ</h1>
            </div>
            <br/>
            <div class="jumbotron" style="padding:40px">
              <!-- FAQ code for one question -->
              <div id="faq-container">
                <div class="question"><p>1. A question?</p></div>
                <div class="dropdown-arrow"><p onClick="toggleDisplay()">&#x25BC</p></div> 
                <div class="dropdown-answer"><p>THIS IS THE ANSWER</p></div>
              </div>
            <!-- php stuff -->
{{--             $faqs = null;
            $faq = null;
              @foreach($faqs as $faq)
                <p style="font-size:14px"><strong>{{ $faq->question }}</strong></p>
                <p style="font-size:12.1px">{{ nl2br($faq->answer) }}</p>                     
                  @endforeach    --}} 
            </div>
          </div>     
          <div class="col-md-3">
            <div class="jumbotron" style="padding:40px">
             <h3> Contact Us </h3>
             <p style="font-size:14px"> <strong> Got any questions about show or getting involved? </strong> </p>
             <p style="font-size:12.1px"> Send us an email at:  <a href="mailto:exec@cserevue.org.au" target="_blank">exec@cserevue.org.au</a> </p>            
            </div>
          </div>
        </div>    
      </div>
    </div>
  </div>

</header>
  {{-- @include('includes.sponsors')       --}}
@endsection

