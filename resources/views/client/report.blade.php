@extends('../master/client')

@section('content')

	<h2>{{ $report->title }}</h2>
			
	<p>{{ $report->text }}</p>
@stop

@section('rightSide')

	<h3>Client Bereich</h3>			
				
	<p>
		This is what your clients are going to see!
	</p>	

@stop