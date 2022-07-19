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
        <div class="text-center">
            <h1>Edit your details</h1>

            <form action="" method="post">
                
            <!-- name -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="Edit your name" required>

            </div>
            <!-- email-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" value="Edit your email" required>

            </div>

            <!--phone-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" name="email" class="form-control" value="Edit your email" required>
                <input type="number" name="" id="">


            </div>
            
            </form>



        </div>
    </div>
    
</body>
</html>