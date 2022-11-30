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
		@forelse($projects as $k=>$project)
		<li>
			<a href="{{$project->path()}}">{{$project->title}}</a>
		</li>
		@empty
		<li>No Projects Yet.</li>
		@endforelse
	</ul>

</body>
</html> 