@extends('../../master/admin')

@section('content')

	<h2>Article Bereich</h2>
			
	<p>Willkommen im Article Bereich!</p>				
	<p>Hier können Sie die Artikel pflegen:</p>
	<table>
		<tr>
			<th>Titel</th>
			<th></th>
			<th>Kategorie</th>
			<th></th>
			<th>HandlerPage</th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
		@foreach($articles as $article)
		
			<tr>
				<td>{{ $article->title }}</td>
				<td width="20"></td>
				<td>{{ $article->categorie?$article->categorie->name:'' }}</td>
				<td width="20"></td>
				<td>{{ $article->handlerPage->name }}</td>
				<td width="20"></td>
				<td>{!! HTML::Link('articles/edit/'.$article->getKey(), 'bearbeiten') !!}</td>
				<td width="20"></td>
				<td>{!! HTML::Link('articles/delete/'.$article->getKey(), 'löschen') !!}</td>
			</tr>	
	
		@endforeach
	</table>
	<p style="text-align: right;">{!! HTML::Link('articles/create', 'Neuen Artikel anlegen') !!}</p>
@stop

@section('rightSide')

	<h3>Article Bereich</h3>			
				
	<p>
		Übersicht über die Artikel
	</p>	

@stop