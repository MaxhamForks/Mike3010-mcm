@extends('../master/client')

@section('content')

	<h2>Reports</h2>
			
	<p>
		@foreach($reports as $report)
		
			{{ HTML::Link('report/show/'.$report->getKey(), $report->title) }} <br />
		
		@endforeach
	</p>
@stop

@section('rightSide')

	<h3>Client Bereich</h3>			
				
	<p>
		This is what your clients are going to see!
	</p>	

@stop