<section class="content-section text-center">
<div class="sponsors">
<div class="container">
  <div class="row">
    <div class="col-lg-10 col-lg-offset-1">
      <div class="sponsor-body">
      @foreach($sponsors as $sponsor)
        <a href="{{ $sponsor->url}}">
          <img src="/img/sponsor/{{ $sponsor->image }}" height="15%" width="20%"/>
        </a>
      @endforeach
      </div>
    </div>
  </div>
</div>
</div>
</section>
