
@extends('layouts')


@section('title')
<title>tagpage</title>
@endsection

@section ('content')
<p> the content of tagpage</p>
<table border="2">
	
	<thead>
		<tr>
			<th colspan="2">TagDescription</th>
		</tr>
		<tr>
			<th>tag</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($tags as $tag)
		<tr>
			<td>{{$tag->Tag}}</td>
			<td>{{$tag->Description}}</td>
		</tr>
		@endforeach


	</tbody>

</table >
@endsection
