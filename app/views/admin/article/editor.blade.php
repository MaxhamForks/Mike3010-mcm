@extends('../../master/admin')

@section('content')

	<h2>Article Editor</h2>
			
	<p>Hier können Sie einen neuen Artikel anlegen!</p>				
	{{ Form::open(array('url' => 'articles/save')) }}
	{{ Form::hidden('id', isset($article) ? $article->getKey() : '') }}
		<table>
			<tr>
				<td><b>Kategorie</b></td>
				<td width="20"></td>
				<td>{{ Form::select('categorie_id', Categorie::all()->lists('name', 'id'), isset($article) ? $article->categorie_id : NULL) }}</td>				
			</tr>
			<tr>
				<td><b>HandlerPage</b></td>
				<td width="20"></td>
				<td>{{ Form::select('handler_page_id', HandlerPage::all()->lists('name', 'id'), isset($article) ? $article->handler_page_id : NULL) }}</td>				
			</tr>
			<tr>
				<td><b>Titel</b></td>
				<td width="20"></td>
				<td>{{ Form::text('title', isset($article) ? $article->title : '') }}</td>				
			</tr>
			<tr>
				<td><b>Text</b></td>
				<td width="20"></td>
				<td>{{ Form::textarea('text', isset($article) ? $article->text : '', array('rows' => 7, 'cols' => 40)) }}</td>				
			</tr>
			<tr>
				<td><b>Navigation?</b></td>
				<td width="20"></td>
				<td>{{ Form::checkbox('nav_kz', 'J', isset($article) ? $article->nav_kz == 'J' : false) }}</td>				
			</tr>
			<tr>
				<td><b>Parent Id</b></td>
				<td width="20"></td>
				<td>{{ Form::text('parent_id', isset($article) ? $article->parent_id : '') }}</td>				
			</tr>
			<tr>
				<td><b>Sortierung</b></td>
				<td width="20"></td>
				<td>{{ Form::text('nav_sort', isset($article) ? $article->nav_sort : '') }}</td>				
			</tr>
			<tr>
				<td><b>Ebene</b></td>
				<td width="20"></td>
				<td>{{ Form::text('nav_level', isset($article) ? $article->nav_level : '') }}</td>				
			</tr>
			<tr>
				<td><b>Nav. Titel</b></td>
				<td width="20"></td>
				<td>{{ Form::text('nav_title', isset($article) ? $article->nav_title : '') }}</td>				
			</tr>
		</table>
		{{ Session::has('info') ? '<p><span style="color: red;">'.Session::get('info').'</span></p>' : '' }}
		<p>
			{{ Form::Submit('Speichern') }}
			{{ HTML::Link('articles', 'zurück') }}
		</p>
	{{ Form::close() }}
@stop

@section('rightSide')

	<h3>Article Bereich</h3>			
				
	<p>
		Füllen Sie die Felder aus und klicken anschließend auf speichern
	</p>	

@stop