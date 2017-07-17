@extends('templates.home')

@section('title')
    @parent - Teams
@endsection

@section('content')
<div class="container">
    <div class="row">

    <div class="span10 offset1" id="main-title">
        <h2>Teams&nbsp;</h2> 
    </div>
    </div>

    <div class="row">

    <div class="span10 offset1" id="main-content">

    <p>The following teams are active in 2015. Click a team name for more information:</p>
{{--     @foreach($teams as $team)
        @if($team->privacy != 1)
            <div style="padding-left: 20px;"><h4><a onclick="toggleTeam({{$team->id}})">{{$team->name}}</a></h4></div>
            <div id="team-{{$team->id}}" style="display: none;padding-left: 20px;">{{nl2br($team->description)}}</div>
        @endif
    @endforeach --}}
</div>
</div>
</div>

<script>
    var toggleTeam = function(id) {
        $("div#team-" + id).toggle(200);
    }
</script>
      
@endsection
