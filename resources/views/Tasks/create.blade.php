<!DOCTYPE html>
<html>
<head>
	<title>Idearun</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">

	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('tasks') }}">View All Tasks</a></li>
		<li><a href="{{ URL::to('tasks/create') }}">Create a task</a>
	</ul>
</nav>

<h1>Create a new task</h1>


	<form action="" method="post">



{{ Form::open(array('url' => 'tasks/create')) }}
		{{ csrf_field() }}

	<div class="form-group">
		{{ Form::label('title', 'Title') }}
		{{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('groups', 'Group') }}
		{{ Form::text('groups', Input::old('groups'), array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('status', 'status') }}
		{{ Form::select('status', array('0' => 'Pending', '1' => 'Done!'), Input::old('nerd_level'), array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Create Task', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>