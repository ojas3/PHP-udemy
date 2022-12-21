
<?php
if (isset($_POST['register'])) {

    $connection = mysqli_connect('localhost', 'root', '', 'users');
    if (!$connection) {
        echo "Connection failed";
    }

    if (empty($_POST['name']) || $_POST['username'] || $_POST['email'] || $_POST['password'] || $_POST['rpassword']) {
        $_SESSION['errorMessage'][]="Please enter all details";
    } else {
        $name = $_POST['name'];
        if (!preg_match("/^[a-zA-z]*$/", $name)) {
            $_SESSION['errorMessage'][]= "Only alphabets and Spaces are allowed";
        }
        $email = $_POST['email'];
        $emailpattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
        if (!preg_match($emailpattern, $email)) {
            $_SESSION['errorMessage'][]= "Enter Valid Email";
        }
        $username = $_POST['username'];
        if (!preg_match("/^[a-zA-z]*$/", $username)) {
            $_SESSION['errorMessage'][]= "Only alphabets and Spaces are allowed";
        }
        $password = md5($_POST['password']);
        $rpassword = md5($_POST['rpassword']);
        if($password!=$rpassword)
        {
            $_SESSION['errorMessage'][]="Password Didn't matched";
        }
        // if (!empty($_POST["password"]) && ($_POST["password"] == $_POST["rpassword"])) {
        //     $password = md5($_POST["password"]);
        //     $rpassword = md5($_POST["rpassword"]);
        //     if (strlen($_POST["password"]) <= '8') {
        //         $_SESSION['errorMessage'][]= "Your Password Must Contain At Least 8 Characters!";
        //     } elseif (!preg_match("#[0-9]+#", $password)) {
        //         $passwordErr = "Your Password Must Contain At Least 1 Number!";
        //     } elseif (!preg_match("#[A-Z]+#", $password)) {
        //         $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
        //     } elseif (!preg_match("#[a-z]+#", $password)) {
        //         $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
        //     }
        // } elseif (!empty($_POST["password"])) {
        //     $cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
        // } else {
        //     $passwordErr = "Please enter password   ";
        // }

            


    }


    $query = "INSERT INTO register(name,username,email,password,rpassword) VALUES ('$name','$username','$email','$password','$rpassword')";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        echo "<script>alert('Error');</script>";
    }
}

?>
<?php
$returnpage = "index.php";
header($returnpage,true)?>