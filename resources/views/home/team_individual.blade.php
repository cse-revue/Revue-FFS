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

    <h4><a href="/teams">Back to teams</a></h4>
{{--     <h3>{{ $team->name }}</h3>
    
    <p>{{nl2br($team->description)}}</p> --}}
	
</div>
</div>
</div>
      
@endsection
