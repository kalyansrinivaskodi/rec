<?php
include 'db_connection.php';
$conn = OpenCon();
echo "Connected Successfully";

        $first_name =  $_REQUEST['advertisementNumber'];//advno
        $last_name = $_REQUEST['applicantName'];//name
        $gender =  $_REQUEST['mobile'];//applicationid
        $address = $_REQUEST['DOB'];//passphoto
        $email = $_REQUEST['passphoto'];//dob
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO first (advertisement, applicantName, passphoto, dob)  VALUES ('$first_name','$last_name','$address','$email')";
         
        //  echo "Hello world!"; 
        if(mysqli_query($conn, $sql)){
            echo "<h3> data stored in a database successfully. Please browse your localhost php my admin to view the updated data </h3>";
 
            echo nl2br("\n$first_name\n $last_name\n "
                . " $address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
CloseCon($conn);

?>
