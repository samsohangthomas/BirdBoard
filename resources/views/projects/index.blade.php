<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h1>Birdboard</h1>
	<ul>
		@foreach($projects as $k=>$value)
		<li>{{$value->title}}</li>
		@endforeach
	</ul>

</body>
</html>