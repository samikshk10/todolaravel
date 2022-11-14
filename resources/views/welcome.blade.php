<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Application</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>

    body{
        font-family:'Century Gothic',sans-serif;
    }
        .title{
            
            text-align: center;
            font-size: 40px;
        }

        th{
            background-color: green;
            color: white;   
            
        }

        .icon{
            border: none;
           color: #fff;
           background-color:transparent;
        }
  
        
    </style>
</head>
<body>
    <div class="col-md-12">


    <div class="container py-3">


    <h1 class="title">Todo Application</h1> 


    <form action="{{route('saveTodo')}}" method="post" >
    
        @csrf
<input type="text" class="form-control" placeholder="Please enter todo" name="todo" required >
<button type="submit" class="btn btn-primary mt-2">Save</button>
    </form>



<table class="table mt-4"> 
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Action</th>
    </tr>

    
    @foreach($list as $value)
  
    <tr>
        <td>

            {{$value->id}}
        </td>

        <td>{{ $value->title }}</td>
        <td><a href="/delete/{{ $value->id }}"><button id="deletebtn" class="btn btn-danger"><i class="fa fa-trash fa-lg icon"></i></button></a></td>
        
        
        
    </tr>
    @endforeach
</table>
<h6 class="text-center">You have {{ count($list)  }} Todo Tasks !!!</h6>

    


    </div>


</body>
</html>