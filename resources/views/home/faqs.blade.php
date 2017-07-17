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
            <div class="jumbotron" style="padding:40px">
{{--             $faqs = null;
            $faq = null;
              @foreach($faqs as $faq)
                <p style="font-size:14px"><strong>{{ $faq->question }}</strong><p>
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
  
</header>
  {{-- @include('includes.sponsors')       --}}
@endsection

