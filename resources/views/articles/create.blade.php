<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="/articles/store">
	{!! csrf_field() !!}
		<label for="title">Title</label>
		<input type="text" name="title"> <br>
		<label for="content">Content</label>
		<textarea name="content" id="content" cols="30" rows="10"></textarea> <br>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>