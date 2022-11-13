<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
    <table class="table table-bordered table-striped table-hover table-dark">
        <tr class="success">
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
            
        </tr>
    @foreach($read as $dt)
        <tr class="success">
            <td>{{$dt->id}}</td>
            <td>{{$dt->title}}</td>
            <td>{{$dt->description}}</td>
            <td>
                <a href="/delete/{{$dt->id}}"> 
                <button type="button" class="btn btn-danger badge-pill">Delete</button>
                </a>
            </td>
        </tr>
    @endforeach
    </table>
</body>
</html>