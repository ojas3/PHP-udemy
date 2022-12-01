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

    $number = 11;
    if ($number == 10) {
        echo "I Love PHP";
        $number++;
    } elseif ($number == 11) {
        echo "I love VS CODE over Any other language";
        $number++;
    } else {
        echo "I love php";
    }



    for ($num = 1; $num <= 10; $num++) {
        echo "<br>" . "This is number ->" . $num . "<br>";
    }


    $day = "Sunday";

    switch ($day) {
        case 'Monday':
            echo "This is Monday";
            break;

        case 'Tuesday':
            echo "This is Tuesday";
            break;
        case 'Wednesday':
            echo "This is Wednesday";
            break;
        case 'Thrusday':
            echo "This is Thrusday";
            break;
        case 'Friday':
            echo "This is Friday";
            break;
        case 'Saturday':
            echo "This is Saturday";
            break;
        case 'Sunday':
            echo "This is Sunday";
            break;
        default:
            echo "Please enter valid Input";
            break;
    }
    ?>
</body>

</html>