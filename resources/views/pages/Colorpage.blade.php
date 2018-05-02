
@extends('layouts')


@section('title')
<title>colorpage</title>
@endsection

@section ('content')
<p> the content of colorpage</p>
<table border="2">
	
	<thead>
		<tr>
			<th colspan="2">ColorASCII</th>
		</tr>
		<tr>
			<th>Color Name</th>
			<th>Color HEX</th>
		</tr>
	</thead>
	<tbody>
		
		@foreach ($colors as $color)	
		<tr>
			<td> {{$color->Color_Name}}</td>
			<td> {{$color->Color_HEX}}</td>
		</tr>
		@endforeach


	</tbody>

</table>
@endsection
