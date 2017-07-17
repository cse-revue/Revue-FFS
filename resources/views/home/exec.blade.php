@extends('templates.home')

@section('title')
    @parent - Executives
@endsection

@section('content')
	
	<div class="container">
		<div class="header">
		<h2 class="titles">Exec&nbsp;</h2>
		</div>
	</div>
	<div class="container">
    <div class="row">

    <div class="span10 offset1" id="main-title">

    </div>
    </div>

    <div class="row">

    <div class="span10 offset1" id="main-content">
    <h3>Executives</h3>
    <p>
    Email: exec@cserevue.org.au<br>
    {{-- The Executive for {{ $year->year }} are: --}}
    </p>

{{--     @foreach($execs as $exec)
        <h4>{{ $exec->position }}</h4>
        <ul>
        @foreach($exec->get_members($year->id) as $member)
            <li>{{$member->profile->full_name}}</li>
            <img>{{$member->profile->image}}<img>
        @endforeach
        </ul>
        <p>Emails: {{$exec->mailing_list()}}</p>
    @endforeach --}}
	</div>
</div>
</div>

@endsection
