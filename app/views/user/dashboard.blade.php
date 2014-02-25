@extends('layouts/global')

@section('content')
<h1>Dashboard</h1>

<p>Welcome to your Dashboard. You rock!</p>

<p>{{ $user->firstname }}</p>
@endsection