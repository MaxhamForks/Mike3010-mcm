@extends('../../master/admin')

@section('content')

	<h2>Report Bereich</h2>
			
	<p>Willkommen im Report Bereich!</p>				
	<p>Hier können Sie die Reports pflegen:</p>
	<table>
		<tr>
			<th>Titel</th>
			<th></th>
			<th>Kategorie</th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
		@foreach($reports as $report)
		
			<tr>
				<td>{{ $report->title }}</td>
				<td width="20"></td>
				<td>{{ $report->categorie->name }}</td>
				<td width="20"></td>
				<td>{{ HTML::Link('reports/edit/'.$report->getKey(), 'bearbeiten') }}</td>
				<td width="20"></td>
				<td>{{ HTML::Link('reports/delete/'.$report->getKey(), 'löschen') }}</td>
			</tr>	
	
		@endforeach
	</table>
	<p style="text-align: right;">{{ HTML::Link('reports/create', 'Neuen Report anlegen') }}</p>
@stop

@section('rightSide')

	<h3>Report Bereich</h3>			
				
	<p>
		Übersicht über die Reports
	</p>	

@stop