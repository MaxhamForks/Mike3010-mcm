@extends('../../master/admin')

@section('content')

	<h2>Meldungen Bereich</h2>
			
	<p>Willkommen im Meldungen Bereich!</p>				
	<p>Hier können Sie die Meldungen pflegen:</p>
	<table>
		<tr>
			<th>Titel</th>
			<th></th>
			<th>Kategorie</th>
			<th></th>
			<th>Sortierung</th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
		@foreach($meldungen as $meldung)
		
			<tr>
				<td>{{ $meldung->title }}</td>
				<td width="20"></td>
				<td>{{ $meldung->categorie->name }}</td>
				<td width="20"></td>
				<td>{{ $meldung->sort }}</td>
				<td width="20"></td>
				<td>{{ HTML::Link('meldungen/edit/'.$meldung->getKey(), 'bearbeiten') }}</td>
				<td width="20"></td>
				<td>{{ HTML::Link('meldungen/delete/'.$meldung->getKey(), 'löschen') }}</td>
			</tr>	
	
		@endforeach
	</table>
	<p style="text-align: right;">{{ HTML::Link('meldungen/create', 'Neue Meldung anlegen') }}</p>
@stop

@section('rightSide')

	<h3>Meldungen Bereich</h3>			
				
	<p>
		Übersicht über die Meldungen
	</p>	

@stop