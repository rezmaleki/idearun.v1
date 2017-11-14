<!DOCTYPE html>
<html>
<head>
	<title>idea run</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
	<div class="navbar-header">

	</div>
	<ul class="nav navbar-nav">
		<li><a href="{{ URL::to('tasks') }}">View All tasks</a></li>
		<li><a href="{{ URL::to('tasks/create') }}">Create a TASK</a>
	</ul>
</nav>

<h1>All TASKs</h1>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>Title</td>
			<td>Status</td>
			<td>Groups</td>

		</tr>
	</thead>
	<tbody>

	@foreach($tasks as  $value  )
		<tr>

			<td>{{ $value->id }}</td>
			<td>{{ $value->title }}</td>
			<td>{{ $value->status }}</td>
			<td>{{ $value->groups }}</td>
			<td>
				<a class="btn btn-small btn-success" href="{{ URL::to('tasks/'  . 'delete/'. $value->id) }}">Delete Task</a>
				<a class="btn btn-small btn-info" href="{{ URL::to('tasks/' . 'edit/'. $value->id ) }}">Mark as done!</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

</div>
</body>
</html>