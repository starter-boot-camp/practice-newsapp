<html>
	<head>
		<title>
			List of articles
		</title>
	</head>
	<body>
		@if(Auth::check())
			<a href="/auth/logout">Logout</a>
		@else
			<a href="/auth/login">Login</a>
			<a href="/auth/register">New User? Register Now!</a>
		@endif

		<h1>All Articles</h1>
		@foreach($articles as $article)
		<article>
			<h1>{{$article->title}}</h1>
			<p>{{$article->content}}</p>
		</article>
		@endforeach
	</body>
</html>