<?php
    $dbh = new PDO("mysql:host=localhost;dbname=recruitment", "root", "");
    $id = isset($_GET['id'])?$_GET['id']:"";
    $stat = $dbh -> prepare("select * from eo_applications where applicationid=?");
    $stat->bindParam(1,$id);
    $stat->execute();
    $row = $stat->fetch();
    header('Content-Type:'.$row['certificates_mime']);
    header("Content-Disposition:attachment;filename='EO".$id."_certificates.pdf'");
    echo $row['certificates_data'];
?>
