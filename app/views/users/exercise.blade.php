@extends('layouts/global')

@section('content')
<h1>Exercise</h1>

{{ $user->firstname }}

<ul>
@foreach($new_exercises as $exercise)
	<li>{{ $exercise->repetitions }}</li>
@endforeach
</ul>

	@endsection