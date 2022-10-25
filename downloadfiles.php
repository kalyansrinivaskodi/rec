<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Blob file SQL</title>
    </head>
    <body>
        <?php
        $dbh = new PDO("mysql:host=localhost;dbname=recruitment", "root", "");
        // if(isset($_POST['btn'])){
            // $name = $_FILES['myfile']['name'];
            // $type=$_FILES['myfile']['type'];
            // $data = file_get_contents($_FILES['myfile']['tmp_name']);
        //     $stmt = $dbh->prepare("insert into imagess values('',?,?,?)");            
        //     $stmt->bindParam(1,$name);
        //     $stmt->bindParam(2,$type);
        //     $stmt->bindParam(3,$data);
        //     $stmt->execute();
        // }
        ?>
        <!-- <form method="post" enctype="multipart/form-data">
        <input type="file" name="myfile"/>    
        <button name="btn">Upload</button>            
        </form> -->
        <p></p>
        <ol>
            <?php
            $stat = $dbh -> prepare("select * from eo_applications");
            $stat->execute();
            while($row = $stat->fetch())
            {
                // echo "<p>".$row[0]."</p>";
                echo "<li><a target='_blank' href='downloadjpeg.php?id=".$row[0]."'>Passphoto_EO".$row[0]."</a></li>";   
            }
            ?>
        </ol>
    </body>
</html>