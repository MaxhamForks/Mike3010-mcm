@foreach($articles as $article)
	<li {{ $article->getKey() == $currentId ? 'id="current"' : '' }}>
		{{ HTML::Link($article->handlerPage->handler.$article->getKey(), $article->nav_title) }}
	</li>
@endforeach