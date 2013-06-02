@extends('../../master/admin')

@section('content')

	<h2>Meldung Editor</h2>
			
	<p>Hier können Sie einen neue Meldung anlegen!</p>				
	{{ Form::open(array('url' => 'meldungen/save')) }}
	{{ Form::hidden('id', isset($meldung) ? $meldung->getKey() : '') }}
		<table>
			<tr>
				<td><b>Kategorie</b></td>
				<td width="20"></td>
				<td>{{ Form::select('categorie_id', Categorie::all()->lists('name', 'id'), isset($meldung) ? $meldung->categorie_id : NULL) }}</td>				
			</tr>
			<tr>
				<td><b>Sortierung</b></td>
				<td width="20"></td>
				<td>{{ Form::text('sort', isset($meldung) ? $meldung->sort : '') }}</td>				
			</tr>
			<tr>
				<td><b>Titel</b></td>
				<td width="20"></td>
				<td>{{ Form::text('title', isset($meldung) ? $meldung->title : '') }}</td>				
			</tr>
			<tr>
				<td><b>Text</b></td>
				<td width="20"></td>
				<td>{{ Form::textarea('text', isset($meldung) ? $meldung->text : '', array('rows' => 7, 'cols' => 40)) }}</td>				
			</tr>
		</table>
		{{ Session::has('info') ? '<p><span style="color: red;">'.Session::get('info').'</span></p>' : '' }}
		<p>
			{{ Form::Submit('Speichern') }}
			{{ HTML::Link('meldungen', 'zurück') }}
		</p>
	{{ Form::close() }}
@stop

@section('rightSide')

	<h3>Meldungen Bereich</h3>			
				
	<p>
		Füllen Sie die Felder aus und klicken anschließend auf speichern
	</p>	

@stop