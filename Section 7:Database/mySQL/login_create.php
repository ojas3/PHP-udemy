<?php
if (isset($_POST['submit'])) {
    $connection=mysqli_connect('localhost','root','','user_details');
    if($connection)
    {
        echo "Hurray connection baan gaya ";
    }
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query="INSERT INTO login_details(username,password)
    VALUES('$username','$password')";


    $result=mysqli_query($connection,$query);

    if(!$result){
        die('Query Failed');
    }
}
?>