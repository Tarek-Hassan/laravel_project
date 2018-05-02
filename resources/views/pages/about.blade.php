
@extends('layouts')
@section('title')
<title>About US</title>
@endsection

@section ('content')
<p> the content of about us</p>
<ol>
	@foreach ($tasks as $task)
	<li>{{$task}}</li>
	@endforeach
</ol>
@endsection