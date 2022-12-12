<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $list = [12, 122, 134, 13432, 254, 567, 786, 4564, 3453, 4234, 3, 4345456, 5767, 8, 33, 56];


    echo max($list); //Max value print  with this function 
    echo "<br>";
    echo min($list);
    echo "<br>";
    print_r($list);
    echo "<br>";
    sort($list);
    echo "<br>";
    print_r($list);
    // sort($list);
    // echo "<br>";
    // print_r($list);
    ?>
</body>

</html>