@extends('../../master/admin')

@section('content')

	<h2>Report Editor</h2>
			
	<p>Hier können Sie einen neuen Report anlegen!</p>				
	{{ isset($report) ? Form::model($report, array('url' => 'reports/save')) : Form::open(array('url' => 'reports/save')) }}
	{{ Form::hidden('id') }}
		<table>
			<tr>
				<td><b>Kategorie</b></td>
				<td width="20"></td>
				<td>{{ Form::select('categorie_id', Categorie::all()->lists('name', 'id')) }}</td>				
			</tr>
			<tr>
				<td><b>Titel</b></td>
				<td width="20"></td>
				<td>{{ Form::text('title') }}</td>				
			</tr>
			<tr>
				<td><b>Text</b></td>
				<td width="20"></td>
				<td>{{ Form::textarea('text', null, array('rows' => 7, 'cols' => 40)) }}</td>				
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