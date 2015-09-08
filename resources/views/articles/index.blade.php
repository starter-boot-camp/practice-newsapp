<html>
	<head>
		<title>
			List of articles
		</title>
	</head>
	<body>
		<h1>All Articles</h1>
		@foreach($articles as $article)
		<article>
			<h1>{{$article->title}}</h1>
			<p>{{$article->content}}</p>
		</article>
		@endforeach
	</body>
</html>