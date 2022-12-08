<?php include "db.php"; ?>
<?php 
function showAllData()
{
    global $connection;
    $query = "SELECT * FROM login_details";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('QUERY FAILED' );
    }
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    
    }

}


?>