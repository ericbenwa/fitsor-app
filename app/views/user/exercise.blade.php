@extends('layouts/global')

@section('content')
<h1>Exercise</h1>

{{ $user->firstname }}

<ul>
@foreach($all_exercises as $exercise)
	<li><strong>{{ $exercise->repetitions }}</strong> , {{ $exercise->created_at }}</li>
@endforeach
</ul>
@endsection