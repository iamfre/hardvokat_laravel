<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<p>Hello</p>
	<pre>
	{{$search_text}}
	</pre>
	<pre>
	@foreach ($search_result as $item)
		{{$item->title}}
	@endforeach
	</pre>
</body>
</html>