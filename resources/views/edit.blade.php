<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <h1 class="text-center">Edit Todo </h1>
    <form action ="{{ route('edittodo') }}" method="post" class="py-4">
        @csrf
        <input type="hidden" value="{{ $data->id }}" name="id">
<input type="text" class="form-control" placeholder="Please enter todo" name="todos" value="{{ $data->title }}" required >
<button type="submit" class="btn btn-primary mt-2">Edit</button>
    </form>


</body>
</html>