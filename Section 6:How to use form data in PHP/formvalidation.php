<?php
if (isset($_POST['Submit'])) {

    $username = $_POST['username'];
    $names = ['ojas', 'vivek', 'vaibhav', 'amit'];
    if ($username < 2) 
    {
        echo "Please enter correct user name";
    } else {
        if (in_array($username, $names)) {
            echo "This name is already in use";
        } else {
            echo "Welcome";
        }
    }



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

    <form action="formvalidation.php" method="post">
        <input type="text" name="username" placeholder="Enter name"> <br>
        <input type="number" name="age" placeholder="Enter Age"><br>
        <input type="email" name="email" placeholder="Enter Email"><br>
        <input type="password" name="password" placeholder="Enter password"><br>
        <input type="submit" name="Submit">
    </form>

</body>

</html>