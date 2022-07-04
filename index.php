<?php
include ("db.php");
$sql="select * from user";
$result=$con->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>
    <div class="text-center mb-4">
        <h1>Signup Form</h1>
</div>


<div class="container">
    <form action="insert.php" method="post">
        <div class="row">
            <div class="col-3 mr-2">
        <input class="form-control" type="number" name="id" placeholder="id"><br>
            </div>
            <br><br>
            <div class="col-3 mr-2">
        <input class="form-control" type="text" name="name" placeholder="name"><br>
            </div>
            <br><br>
            <div class="col-3 mr-2">
        <input class="form-control" type="text" name="gender" placeholder="gender"><br>
            </div>
            <br><br>
            <div class="col-3 mr-2">
        <input class="form-control" type="email" name="email" placeholder="email"><br>
            </div>
            <br><br>
            <div class="col-3 mr-2">
        <input class="form-control" type="number" name="phonenumber" placeholder="phonenumber"><br>
            </div>
            <br><br>
            <div class="col-3 mr-2">
        <input class="form-control" type="password" name="password" placeholder="password"><br>
            </div>
            <br><br>
            <div class="col mr-2">
        <input class="btn btn-primary" type="submit">
            </div>
        </div>
        
    </form>
</div>

             <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>

