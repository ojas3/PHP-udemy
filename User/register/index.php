
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="register.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register</title>
</head>

<body>
    <div class="container">
        <!-- Pills navs -->
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-login" href="/Ojas-Learning/PHP-udemy/User/login/">Login</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link  active" id="tab-register"
                    href="/Ojas-Learning/PHP-udemy/User/register/register.html">Register</a>
            </li>
        </ul>
        <!-- Pills navs -->

        <form action="register.php" method="POST">
            <!-- Name input -->
            <div class="form-outline mb-4">
                <input type="text" name="name" class="form-control" />
                <label class="form-label" for="registerName">Name</label>
                <div class="alert alert-danger" role="alert">
                    <?php $_SESSION['errorMessage']; ?>
                </div>
            </div>
            <!-- Username input -->
            <div class="form-outline mb-4">
                <input type="text" id="registerUsername" name="username" class="form-control" />
                <label class="form-label" for="registerUsername">Username</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="registerEmail" name="email" class="form-control" />
                <label class="form-label" for="registerEmail">Email</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="registerPassword" name="password" class="form-control" />
                <label class="form-label" for="registerPassword">Password</label>
            </div>

            <!-- Repeat Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="registerRepeatPassword" name="rpassword" class="form-control" />
                <label class="form-label" for="registerRepeatPassword">Repeat password</label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
                    aria-describedby="registerCheckHelpText" />
                <label class="form-check-label" for="registerCheck">
                    I have read and agree to the terms
                </label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-3" value="register"
                name="register">Register</button>
        </form>
    </div>
</body>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>

</html>