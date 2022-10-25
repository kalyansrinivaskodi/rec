<?php
    $dbh = new PDO("mysql:host=localhost;dbname=recruitment", "root", "");
    $id = isset($_GET['id'])?$_GET['id']:"";

    // $name = $_FILES['myfile']['name'];
    // $type=$_FILES[]['type'];
    // $data = file_get_contents($_FILES['myfile']['tmp_name']);

    $stat = $dbh -> prepare("select * from eo_applications where applicationid=?");
    $stat->bindParam(1,$id);
    $stat->execute();
    $row = $stat->fetch();
    // echo $row[4];
    header('Content-Type:'.$row[$_FILES[$row[4]]['type']]);
    header("Content-Disposition:attachment;filename='EO".$id.".jpg'");
    // echo $row['data'];
?>