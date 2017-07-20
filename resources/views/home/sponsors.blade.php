@extends('templates.home')


@section('content')

<div class="sponsor">
  <div class="sponsor-body">
<div class="container">
    <div class="row">

    <div class="span10 offset1" id="main-title">
        <h2>Sponsors&nbsp;</h2>
    </div>
    </div>

    <div class="row">
    <div class="span10 offset1" id="main-content">
      <div class="jumbotron">
        <p>Sponsorship of the CSE Revue Society gives us the chance to provide better events for our society as well as helping us present a quality show for the wider UNSW community. </p>
        <p>It is only through the generous support of the organisations below that a major student production such as CSE Revue continues to provide opportunities for students to broaden their tertiary education experience.</p>
      <br/>
        <table>
          <tr>
            <td class="left-images"><a href="/home/index" target="_blank"><img src="../img/doge.jpg" width="200px" height="120px"/></a></td>
            <td><a href="/home/index" target="_blank"><img src="../img/doge.jpg" width="200px" height="120px"/></a></td>
            <td><a href="/home/index" target="_blank"><img src="../img/doge.jpg" width="200px" height="120px"/></a></td>
            <td class="right-images"><a href="/home/index" target="_blank"><img src="../img/doge.jpg" width="200px" height="120px"/></a></td>
          </tr>
          <tr id="mid-row-img">
            <td class="left-images"><a href="/home/index" target="_blank"><img src="../img/doge.jpg" width="200px" height="120px"/></a></td>
            <td><a href="/home/index" target="_blank"><img src="../img/doge.jpg" width="200px" height="120px"/></a></td>
            <td><a href="/home/index" target="_blank"><img src="../img/doge.jpg" width="200px" height="120px"/></a></td>
            <td class="right-images"><a href="/home/index" target="_blank"><img src="../img/doge.jpg" width="200px" height="120px"/></a></td>
          </tr>
          <tr>
            <td class="left-images"><a href="/home/index" target="_blank"><img src="../img/doge.jpg" width="200px" height="120px"/></a></td>
            <td><a href="/home/index" target="_blank"><img src="../img/doge.jpg" width="200px" height="120px"/></a></td>
            <td><a href="/home/index" target="_blank"><img src="../img/doge.jpg" width="200px" height="120px"/></a></td>
            <td class="right-images"><a href="/home/index" target="_blank"><img src="../img/doge.jpg" width="200px" height="120px"/></a></td>
          </tr>
          <tr>
            <td colspan="4" id="single-sponsor-row"><a href="/home/index" target="_blank"><img src="../img/doge.jpg" width="200px" height="120px"/></a></td>
          </tr>
        </table>
      <br/>
        <!-- Sponsor image section HERE-->
        <table class="table table-no-border">
{{--         @foreach($sponsors as $sponsor)
            <tr>
                <td width="120px" style="text-align: center; vertical-align: middle;"><img src="/img/sponsor/{{ $sponsor->image }}" width="100px" height="100px" target="_blank"/></td>
                <td><h4><a href="{{ $sponsor->url}}">{{$sponsor->name}}</a></h4><p>{{$sponsor->description}}</p></td>
            </tr>
        @endforeach --}}
        </table>
        <h4>Interested in a sponsorship CSE Revue? <a href="/home/sponsorship-opportunities">Learn how to become sponsor&nbsp;</a></h4>
      </div>
    </div>


</div>
</div>
</div>
</div>

@endsection
