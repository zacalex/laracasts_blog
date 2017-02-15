<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>New HMTL document by NewJect</title>

</head>
<body>

<ul>
    @foreach ($tasks as $task)
        <li>
        <a href="/blog/public/tasks/{{ $task->id }}">{{ $task }}</a></li>
    @endforeach
</ul>

</body>
</html>