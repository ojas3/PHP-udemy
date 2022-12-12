<?php include "db.php";

$query = "SELECT * FROM login_details";

$result = mysqli_query($connection, $query);

if (!$result) {
    die('QUERY FAILED' );
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
    <div class="container">
        <div class="col-sm-6">

            <?php
            while ($row = mysqli_fetch_assoc($result)) {

            ?>

            <pre>
    <?php

                print_r($row);
            ?>
         </pre>
            <?php
            }
            ?>



        </div>
    </div>
</body>

</html>