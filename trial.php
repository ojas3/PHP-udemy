
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="trial1.php" method="POST">
        <div>
            <input name="name" placeholder="Enter username" >
            <h4><?php echo $_SESSION['error']; ?></h4>
           
        </div>
        <div>
            <button name="register" >register</button>
        </div>

    </form>

        <div>
            <h3><?php echo $_SESSION['name']; ?></h3>
        </div>

       
</body>
</html>
