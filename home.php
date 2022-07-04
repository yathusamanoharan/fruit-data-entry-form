<?php session_start(); ?>

<?php
include ("db.php");
$sql="select * from fruit1";
$result=$con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION["email"];?></h1>
    <a href="logout.php"> Sign out</a>
<br><br>

<div class="container">
    <form action="insert-fruit.php" method="post">
        <div class="row">
            <div class="col-3 mr-2">
        <input class="form-control" type="number" name="id" placeholder="FID"><br>
            </div>
            <br><br>
            <div class="col-3 mr-2">
        <input class="form-control" type="text" name="name" placeholder="Name"><br>
            </div>
            <br><br>
            <div class="col-3 mr-2">
        <input class="form-control" type="text" name="weight" placeholder="Weight"><br>
            </div>
            <br><br>
            <div class="col-3 mr-2">
        <input class="form-control" type="text" name="price" placeholder="Price"><br>
            </div>
            <br><br>
            <div class="col mr-2">
        <input class="btn btn-primary" type="submit">
            </div>
        </div>
        
    </form>
</div>

    <div class="container">
    <table class="table">
        <tr> 
            <th>fID</th>
            <th>Name</th>
            <th>Weight</th>
            <th>Price</th>
            <th></th>
            <th></th>
            </tr>

        <tbody>
            

       
            <?php
                 if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                        ?>
                         <tr>
               <th><?php echo $row['fid'];?></th>
               <th><?php echo $row['name'];?></th>
               <th><?php echo $row['weight'];?></th>
               <th><?php echo $row['price'];?></th>
               <th><a class="btn btn-outline-primary " href="update.php?id=<?php echo $row['fid'];?>">Edit</a></th>
               <th><a class="btn btn-outline-danger" href="delete.php?id=<?php echo $row['fid'];?>">Delete</a></th>

</tr>
<?php


                    }
                 }
           ?>
             </tbody>


</body>
</html>