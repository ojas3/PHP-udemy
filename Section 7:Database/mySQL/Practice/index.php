<?php include "db.php" ?>
<?php include "function.php" ?>
<?php adddata() ?>

<?php include "header.php" ?>
    <h1>Practice 7</h1>
    <form action="index.php" method="post">
        <div>
            <input type="text" placeholder="Student name" name="sname"> 
        </div>
        <div>
            <input type="text" placeholder="Student Class" name="sclass" >
        </div>
        <div>
        <input type="submit" name="submit" value="Submit" >
        </div>
    </form>


    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Student Class</th>
            </tr>                
            <?php studentrecord();  ?>
    </table>
    </div>
</body>
</html>