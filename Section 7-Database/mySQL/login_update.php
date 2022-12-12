<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php 
if(isset($_POST['submit']))
{
   $username=$_POST['username'];
   $password=$_POST['password'];
   $id=$_POST['id'];

    $query = "UPDATE login_details SET username='$username',password='$password' WHERE id='$id'";
    $result = mysqli_query($connection, $query);
    if(!$query){
        die('query FAILED');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login read</title>
</head>

<body>
<div class="col-sm-4">
        <form action="login_update.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" placeholder="Username" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" placeholder="Password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <select name="id" id="">
                   <?php
                    showAllData();
                    ?> 
                </select>
            </div>
            <div class="btn-btn-primary">
                <input class="btn btn-primary" type="submit" name="submit" value="Update">
            </div>
            </form>
    </div>
</body>

</html>