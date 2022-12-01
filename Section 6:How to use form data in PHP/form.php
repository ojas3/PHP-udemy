<?php 
if(isset($_POST['Submit'])){
   echo $_POST['username'];
   echo "<br>";
   echo $_POST['age'];
   echo "<br>";
   echo $_POST['email'];
   echo "<br>";
   echo $_POST['password'];
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="form.php" method="post">
    <input type="text" name="username" placeholder="Enter name" > <br>
    <input type="number" name="age" placeholder="Enter Age"><br>
    <input type="email" name="email" placeholder="Enter Email"><br>
    <input type="password" name="password" placeholder="Enter password"><br>
    <input type="submit" name="Submit">
</form>
    
</body>
</html>