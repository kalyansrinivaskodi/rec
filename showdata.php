        
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Blob file SQL</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-glyph.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style1.css">  
        <style>
            
            table {
            border: 1px solid black;
            width: 80%;
            align:center
            }

            th, td {
            padding: 1px;
            text-align: left;
            border: 1px solid red;
            }

        </style>

    </head>
    <body>
        <?php
            $dbh = new PDO("mysql:host=localhost;dbname=recruitment", "root", "");  
            ?>
                  
            <table>
            <?php
            $stat = $dbh -> prepare("select * from eo_applications");
            $stat->execute();
            echo "<thead><th>Application ids</th><th>Passport size images</th></thead>";
            while($row = $stat->fetch())
            {
                echo "<tr>
                <td>application id : EO".$row['applicationid']."</td>
                <td><a target='_blank' href='view.php?id=".$row['applicationid']."'>".$row['passphoto_name']."</a></td>
                </tr>";
                
            }
            
            ?>
            </table>
        
    </body>
</html>