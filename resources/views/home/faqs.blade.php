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
  <div class="faq-body">
    <div class="container">
      <div class="row">
        <div class="col-md-1"> </div>
        <div class="col-md-7">
          <h1 style="color: white;">FAQ / Contact Us </h1>
        </div>
        <div class="row">
          <div class="col-md-1"> </div>
          <div class="col-sm-6">
            <div id="faqTitle">
              <h1 align="center">FAQ</h1>
            </div>
          </div>
          <div class="col-md-7">
            <br/>
            <div class="jumbotron" style="padding:40px">
              <!-- FAQ code for one question -->
              <div id="faq-container">
                <div class="question"><p><strong>What is a CSE?</strong></p></div>
                <div class="dropdown-arrow" onclick="toggleDisplay(this)"><p>&#x25BC</p></div>
                <div class="dropdown-answer"><p>The School of Computer Science & Engineering, part of the Faculty of Engineering.</p></div>
                <br/>

                <div class="question"><p><strong>What is a CSE?</strong></p></div>
                <div class="dropdown-arrow" onclick="toggleDisplay(this)"><p>&#x25BC</p></div>
                <div class="dropdown-answer"><p>The School of Computer Science & Engineering, part of the Faculty of Engineering.</p></div>
                <br/>
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
  <script type="text/javascript">
    /*
    $( ".faq .faq-body #faq-container .dropdown-arrow" ).click(function() {
      $(".faq .faq-body #faq-container .dropdown-answer").toggle();
    });    */
    function toggleDisplay(elem){
      //Rotates arrow to face downwards when clicked on (and answer is revealed)
      if ( $(elem).css("transform") == 'none'){
        $(elem).css("transform", "rotate(270deg)");
      }
      else {
        $(elem).css("transform", "none");
      }
      //Toggle answer text for this question
      //alert(elem.closest('.faq-container').find('.dropdown-answer').className);
      //nextElementSibling finds next element node (skips text nodes)
      //Note: Answer div needs to be straight after respective question div for this to work!
      if (elem.nextElementSibling.style.display == 'inline-block'){
        elem.nextElementSibling.style.display = 'none';
      } else {
        elem.nextElementSibling.style.display = 'inline-block';
      }

    }
  </script>
</header>
  {{-- @include('includes.sponsors')       --}}
@endsection
