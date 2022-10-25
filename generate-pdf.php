<?php
//include connection file 
include "dbconfig.php";
// include_once('fpdf/fpdf.php');
include_once('fpdf/mem_image.php');
 
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('https://i2.wp.com/tutorialswebsite.com/wp-content/uploads/2016/01/cropped-LOGO-1.png',10,10,50);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'Employee List',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
$display_heading = array(
    'advertisement'=> 'Advertisement','postappliedfor' =>'Post Applied For',
    'gender' =>'Gender','fathername' =>'Father Name','mothername' =>'Mother Name',
    'nationality' =>'Nationality','category' =>'Category','maritalstatus' =>'Marital Status',
    'feerelaxation' =>'Feerelaxation','feerelaxationby' =>'Feerelaxationby','disablity' =>'Disablity',
    'typeofdisability' =>'typeofdisability','percentageofdisability' =>'Percentage Of Disability','exservice' =>'Ex-service',
    'yearsofexservice' =>'YearsOfExservice','centralemployee' =>'centralemployee','cpriemployee' =>'cpriemployee',
    'minority' =>'minority','minoritydetails' =>'minoritydetails','permanentaddress' =>'permanentaddress',
    'currentaddress' =>'currentaddress','gatescore' =>'gatescore','higherstudies' =>'higherstudies',
    'higherstudiesdetails' =>'higherstudiesdetails','appointment' =>'appointment','appointmentdetails' =>'appointmentdetails',
    'criminaloffence' =>'criminaloffence','passphoto_name' =>'passphoto_name','passphoto_mime' =>'passphoto_mime',
    'passphoto_data' =>'passphoto_data','passphoto' =>'passphoto',
    'sign_name' =>'sign_name','sign_mime' =>'sign_mime','sign_data' =>'sign_data','sign' =>'sign',
    'ssccertificate_name' =>'ssccertificate_name','ssccertificate_mime' =>'ssccertificate_mime',
    'ssccertificate_data' =>'ssccertificate_data',
    'ssccertificate' =>'ssccertificate',
    'certificates_name' =>'certificates_name','certificates_mime' =>'certificates_mime','certificates_data' =>'certificates_data',
    'certificates' =>'certificates',
    'gatescorecard_name' =>'gatescorecard_name','gatescorecard_mime' =>'gatescorecard_mime',
    'gatescorecard_data'=>'gatescorecard_data','gatescorecard'=>'gatescorecard',
    'graduationcourse'=>'graduationcourse','graduationbranch'=>'graduationbranch','graduationboard'=>'graduationboard','graduationcollege'=>'graduationcollege',
    'graduationyop'=>'graduationyop','gmarks'=>'gmarks','graduationpercentage'=>'graduationpercentage',
    'intercourse'=>'intercourse','interbranch'=>'interbranch','interboard'=>'interboard','intercollege'=>'intercollege',
    'interyop'=>'interyop','intermarks'=>'intermarks','interpercentage'=>'interpercentage',
    'sslccourse'=>'sslccourse','sslcbranch'=>'sslcbranch','sslcboard'=>'sslcboard','sslccollege'=>'sslccollege','sslcyop'=>'sslcyop',
    'sslcmarks'=>'sslcmarks','sslcpercentage'=>'SSLC Percentage', 'pwdcertificatenumber'=>'pwdcertificatenumber' ,'pwdissuedate'=>'pwdissuedate',


    'applicationid'=>'Application Id', 'applicationName'=> 'Application Name', 'email'=> 'Email','dob'=> 'DoB','mobile'=> 'Mobile'


);
 
// $result = mysqli_query($conn, "SELECT applicationid, applicationname, email, mobile, dob
// advertisement, postappliedfor, gender, fathername, mothername, nationality, category, maritalstatus,
// feerelaxation, feerelaxationby, disablity, typeofdisability, percentageofdisability, exservice,
// yearsofexservice, centralemployee, cpriemployee,minority,minoritydetails,permanentaddress,currentaddress,
// qualificationname,qualificationjoiningdate,qualificationpassingdate,qualificationpercentage,qualificationbranch,
// qualificationcollege,gatescore,higherstudies,higherstudiesdetails,appointment,appointmentdetails,
// criminaloffence,passphoto_name,passphoto_mime,passphoto_data,passphoto,sign_name,sign_mime,sign_data,
// sign,ssccertificate_name,ssccertificate_mime,ssccertificate_data,ssccertificate,
// certificates_name,certificates_mime,certificates_data,
// gatescorecard_name,gatescorecard_mime,gatescorecard_data,gatescorecard
// FROM eo_applications where applicationid=14") or die("database error:". mysqli_error($conn));

$header = mysqli_query($conn, "SHOW columns FROM eo_applications WHERE field not like '%passphoto%' AND field not like '%sign%' AND field not like '%gatescorecard%' AND field not like '%certificate%'   ");



    $dbh = new PDO("mysql:host=localhost;dbname=recruitment", "root", "");
    $id = isset($_GET['id'])?$_GET['id']:"";
    $stat = $dbh -> prepare("select * from eo_applications where applicationid=?");
    $stat->bindParam(1,$id);
    $stat->execute();
    $row = $stat->fetch();



$pdf = new PDF_MemImage();

// Load an image into a variable
// $logo = $row['passphoto_data'];
// $pdf->MemImage($logo, 150, 10,40,40 );

// // Create a GD graphics
// $im = imagecreate(200, 150);
// $bgcolor = imagecolorallocate($im, 255, 255, 255);
// $bordercolor = imagecolorallocate($im, 0, 0, 0);
// $color1 = imagecolorallocate($im, 255, 0, 0);
// $color2 = imagecolorallocate($im, 0, 255, 0);
// $color3 = imagecolorallocate($im, 0, 0, 255);
// imagefilledrectangle($im, 0, 0, 199, 149, $bgcolor);
// imagerectangle($im, 0, 0, 199, 149, $bordercolor);
// imagefilledrectangle($im, 30, 100, 60, 148, $color1);
// imagefilledrectangle($im, 80, 80, 110, 148, $color2);
// imagefilledrectangle($im, 130, 40, 160, 148, $color3);
// // Output it
// $pdf->GDImage($im, 120, 25, 40);
// imagedestroy($im);


// $pdf->Output();





// $pdf = new PDF();
// //header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',16);

$passphoto = $row['passphoto_data'];
$pdf->Cell(100,10,$pdf->MemImage($passphoto, 150, 30,35,35),0);
$pdf->Ln();

$sign = $row['sign_data'];
$pdf->Cell(100,10,$pdf->MemImage($sign, 150, 68,35,15),0);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();



foreach($header as $heading) {
$pdf->Cell(80,10,$display_heading[$heading['Field']],1);

$pdf->Cell(80,10,$row[$heading['Field']],1);

$pdf->Ln();
}

$pdf->Output();





?>