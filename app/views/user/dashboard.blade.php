@extends('layouts/global')

@section('content')
<h1>{{ $user->firstname }}'s Dashboard</h1>

<ul>
@foreach($all_exercises as $exercise)
	<li><strong>{{ $exercise->repetitions }}</strong> , {{ $exercise->created_at }}</li>
@endforeach
</ul>
@endsection