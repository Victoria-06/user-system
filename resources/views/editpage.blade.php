<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User page</title>

<!-- bootstrap css link -->  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


</head>
<body>
    <div class="container">
        <div class="">
            <h1 class="text-center m-5">Edit your details</h1>


            <form action="{{url('/update/'. $user->id)}}" method="post">
                @csrf
                
            <!-- name -->
            <input type="hidden" name="id" value="{{$user->id}}">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="name" class="form-label"><b>Name</b></label>
                <input type="text" name="name" class="form-control" value="{{$user->name}}" required>

            </div>
            <!-- email-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="email" class="form-label"><b>Email</b></label>
                <input type="text" name="email" class="form-control" value="{{$user->email}}" required>

            </div>

            <!--phone-->
            
            <div class="form-outline mb-4 w-50 m-auto">
            <label for="phone" class="form-label"><b>Phone</b></label>
                <input type="tel" name="phone" class="form-control" value="{{$user->phone}}" required>

            </div>
            <div class="text-center">
            <input type="submit" value="Update User" class="m-5 btn btn-info">
            </div>
            <div>
            <a href="/Users" class="btn btn-success">Back</a>
            </div>
            
            </form>
           



        </div>
    </div>
    
</body>
</html>