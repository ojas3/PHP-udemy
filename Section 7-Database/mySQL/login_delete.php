<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php 

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM login_details WHERE id=$id";
    $result = mysqli_query($connection, $query);
    if (!$result)
    {
        echo "Query Failed";
    };
}?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Delete</title>
</head>

<body>
    <form action="login_delete.php" method="post">
        <div class="form-group">
            <select name="id" id="">
                <?php
                   showAllData();
                   ?>
            </select>
        </div>
        <div class="btn-btn-primary">
            <input class="btn btn-primary" type="submit" name="submit" value="Delete">
        </div>
    </form>
</body>

</html>