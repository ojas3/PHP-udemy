<?php include "db.php" ?>
<?php

function adddata()
{

    if (isset($_POST['submit'])) {


        global $connection;
        $sname = $_POST['sname'];
        $sclass = $_POST['sclass'];
        $query = "INSERT into presentstudents (pname, sclass ) VALUES ('$sname','$sclass')";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            echo "True vaule can be saved";
        }
    }


}

function studentrecord()
{


    global $connection;
    $query = "SELECT * from presentstudents";
    $result = mysqli_query($connection, $query);
   
    $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
    

    foreach ($data as $key => $value) {
        echo "<tr> 
            <td>$value[id]</td>
            <td>$value[pname]</td>
            <td>$value[sclass]</td>
            </tr>";
    }
    if (!$result) {
        echo "True vaule can be saved";
    }


}

?>