@extends('../../master/admin')

@section('content')

	<h2>Report Editor</h2>
			
	<p>Hier können Sie einen neuen Report anlegen!</p>				
	{{ Form::open(array('url' => 'reports/save')) }}
	{{ Form::hidden('id', isset($report) ? $report->getKey() : '') }}
		<table>
			<tr>
				<td><b>Kategorie</b></td>
				<td width="20"></td>
				<td>{{ Form::select('categorie_id', Categorie::all()->lists('name', 'id'), isset($report) ? $report->categorie_id : NULL) }}</td>				
			</tr>
			<tr>
				<td><b>Titel</b></td>
				<td width="20"></td>
				<td>{{ Form::text('title', isset($report) ? $report->title : '') }}</td>				
			</tr>
			<tr>
				<td><b>Text</b></td>
				<td width="20"></td>
				<td>{{ Form::textarea('text', isset($report) ? $report->text : '', array('rows' => 7, 'cols' => 40)) }}</td>				
			</tr>
		</table>
		{{ Session::has('info') ? '<p><span style="color: red;">'.Session::get('info').'</span></p>' : '' }}
		<p>
			{{ Form::Submit('Speichern') }}
			{{ HTML::Link('reports', 'zurück') }}
		</p>
	{{ Form::close() }}
@stop

@section('rightSide')

	<h3>Report Bereich</h3>			
				
	<p>
		Füllen Sie die Felder aus und klicken anschließend auf speichern
	</p>	

@stop