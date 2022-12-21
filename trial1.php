<?php session_start(); ?>
<?php
if (isset($_POST['register'])) {
    $connection = mysqli_connect('localhost', 'root', '', 'test');
    if (!$connection) {
        echo "Connection nahi baana";
    }
    if (empty($_POST['name'])) {
        $_SESSION['error'] = "Name field is empty";
    }
    else{
        $name=$_POST['name'];
        $_SESSION['name'] = $name;
    }

}




?>
<?php
if($_SESSION['error'])
{
    header("Location: trial.php?status=error");
    exit();
}
else
{
    header("Location: trial.php?status=success");
    exit();
}
   
?>