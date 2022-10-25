<?php
include 'db_connection.php';
$conn = OpenCon();
echo "Connected Successfully";
   
?>
<!DOCTYPE html>
<html>
    <body>
        <br>

        <input type="button" value="Download image" onclick="msg()">        
        <?php 
        $sql = "select * from first where applicationid=getElementbyid(applicationid)";
        ?>
      
    </body>
</html>

<?php


// mysqli_close($conn);
// CloseCon($conn);
?>