


<?php 

include 'db_connection.php';
$conn = OpenCon();


$heading = "EO applications DATA";

// $dbh = new PDO("mysql:host=localhost;dbname=recruitment", "root", "");
// echo "Connected Successfully";
        
           

            
                // echo $arguments;

                $sql = "SELECT applicationid,passphoto_name,sign_name,ssccertificate_name,certificates_name,gatescorecard_name FROM eo_applications ORDER BY gatescore DESC ";

                // echo $sql;


                echo "<table border='1px solid black'>"; 
                echo "<thead><tr>";
                
                echo "<th style='width:200px'><center>Application Id</center></th>";
                echo "<th style='width:200px'><center>Application Details</center></th>";
                echo "<th style='width:200px'><center>passphoto_download</center></th>";
                echo "<th style='width:200px'><center>sign_download</center></th>";
                echo "<th style='width:200px'><center>SSC_download</center></th>";
                
                echo "<th style='width:200px'><center>All certificates_download</center></th>";
                
                echo "<th style='width:200px'><center>GateScorecard_download</center></th>";

                echo "</tr></thead>";

               
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        
                        echo "<td>".$row['applicationid']."</td>";
                        echo "<td><a target='_blank' href='generate-pdf.php?id=".$row['applicationid']."'>generatepdfof".$row['applicationid']."</a></td>";
                        echo "<td><a target='_blank' href='passphoto_view.php?id=".$row['applicationid']."'>".$row['passphoto_name']."</a></td>";
                        echo "<td><a target='_blank' href='sign_view.php?id=".$row['applicationid']."'>".$row['sign_name']."</a></td>";
                        echo "<td><a target='_blank' href='ssccertificate_view.php?id=".$row['applicationid']."'>".$row['ssccertificate_name']."</a></td>";
                        echo "<td><a target='_blank' href='certificates_view.php?id=".$row['applicationid']."'>".$row['certificates_name']."</a></td>";
                        echo "<td><a target='_blank' href='gatescorecard_view.php?id=".$row['applicationid']."'>".$row['gatescorecard_name']."</a></td>";
                        
                        
                        echo "</tr>";

                    }
                    
                } 
                else {
                    echo "0 results";
                }  

                echo "</table>";
                
             

            


?>
