<?php
session_start();
?>

<!DOCTYPE html>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

<style>




header{
  background:white;
  height:150px;

  width:100%;
}
.cprilogo {
  width:150px;
  height:150px;
  float:left;
}

.diamondjublee {
  width:150px;
  height:150px;
  float:right;
}

.title-english {
  text-align: center;
  font-size:50px;
  padding:0px;
  margin:0px;
  color:blue;
  
}
.title-hindi {
  text-align: center;
  font-size:50px;
  color:red;
  padding:0px;
  margin:0px;
  
}




/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  header a {
    float: none;
    display: block;
    text-align: left;
  }
  
}


* {
  box-sizing: border-box;
}

table {
  border-collapse: collapse;
  width: 100%;
}

#success_message{ display: none;}
.display-page{
        text-align: center;
        text-transform: uppercase;
        color:#b30000;
      }
      #unerror,#unerror2,#dserror,#deperror,#emerror,#pherror,#compcaterror,#snerror,#merror, #mderror, #werror, #ramerror, #hderror, #prerror, #oserror,
       #mmerror, #mserror, #comperror{
      margin:0 auto;
      display: table;
    }
th, td {
    padding: 20px;
    text-align: left;
    border-bottom: 3px solid #ddd;
  }
  
body {
  
}

#regForm {
  background-color: white ;
  margin:  auto;
  border: 2px solid black;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
  padding-top:0px;
}

h2 {
  text-align: center;
}

input {
  padding: 10px;
  /* width: 100%; */
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #bbbbbb;
  height:auto; 
  width:auto;
  
}

/* Mark input boxes that gets an error on validation: */

input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}

.required {
  color: red;
}

</style>

<script src="js/master_asset.js"></script>


      <script>
        function previewForm(){
          // Step 1: Read form data here using DOM APIs
          // Step 2: Open preview using some modal dialog.
          window.alert("kalyan");
          // Or use some other bootstrap or equivalent library dialog box.
        }
      </script>




<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-glyph.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style1.css">  


</head>

<body>
<header>
<img src="images/cprilogo.png" class="cprilogo"/>
      <img src="images/cpri_60yrs_celeb.jpeg" class="diamondjublee"/>
      <div> 
      <h1 class="title-english">Central Power Research Institute</h1>
      <h1 class="title-hindi">केन्द्रीय विद्युत अनुसंधान संस्थान</h1>
      </div>          
    </header>



    <?php
include 'db_connection.php';
// $conn = OpenCon();

$dbh = new PDO("mysql:host=localhost;dbname=recruitment", "root", "");
// echo "Connected Successfully";
        if(isset($_POST['submit']))
        {
        $advertisement_Number =  $_REQUEST['advertisementNumber'];//advno
        $application_name = $_REQUEST['applicantName'];//name        
        $mobile= $_REQUEST['mobile']; //mobile
        $dob = $_REQUEST['DOB'];//dob

        // $passphoto = $_REQUEST['pass_photo'];//passphoto 
        
        $passphoto_name = $_FILES['pass_photo']['name'];
        $passphoto_type = $_FILES['pass_photo']['type'];
        $passphoto_data =file_get_contents($_FILES['pass_photo']['tmp_name']);
        $passphoto = $_FILES['pass_photo'];
         
         // echo $passphoto_data;

        $sign_name = $_FILES['sign']['name'];
        $sign_mime = $_FILES['sign']['type'];
        $sign_data =file_get_contents($_FILES['sign']['tmp_name']);
        $sign = $_FILES['sign'];

        $ssccertificate_name = $_FILES['ssccertificate']['name'];
        $ssccertificate_mime = $_FILES['ssccertificate']['type'];
        $ssccertificate_data =file_get_contents($_FILES['ssccertificate']['tmp_name']);
        $ssccertificate = $_FILES['ssccertificate'];

        $certificates_name = $_FILES['certificates']['name'];
        $certificates_mime = $_FILES['certificates']['type'];
        $certificates_data =file_get_contents($_FILES['certificates']['tmp_name']);
        $certificates = $_FILES['certificates'];

        $gatescorecard_name= $_FILES['gatescorecard']['name'];
        $gatescorecard_mime= $_FILES['gatescorecard']['type'];
        $gatescorecard_data= file_get_contents($_FILES['gatescorecard']['tmp_name']);        
        // echo $_FILES['gatescorecard']['tmp_name'];
        $gender= $_REQUEST['gender'];





        

        $fathername= $_REQUEST['fathername'];
        $mothername= $_REQUEST['mothername'];
        $nationality= $_REQUEST['nationality'];
        $category= $_REQUEST['category'];
        $maritalstatus= $_REQUEST['maritalstatus'];

        $email= $_REQUEST['email'];
        $feerelaxation= $_REQUEST['feerelaxation'];
        $feerelaxationby= $_REQUEST['feerelaxationby'];
        $disability= $_REQUEST['disability'];
        


        $typeofdisability= $_REQUEST['typeofdisability'];
        $pwdpercentage= $_REQUEST['pwdpercentage'];//diffff
        $exservice= $_REQUEST['exservice'];
        $yearsofexservice= $_REQUEST['yearsofexservice'];
        $centralemployee= $_REQUEST['centralemployee'];


        $cpriemployee= $_REQUEST['cpriemployee'];
        $minority= $_REQUEST['minority'];
        $minoritydetails= $_REQUEST['minoritydetails'];
        $permanentaddress= $_REQUEST['permanentaddress'];

        
        $postappliedfor= $_REQUEST['postName'];
        $currentaddress= $_REQUEST['currentaddress'];

        


        $graduationcourse = $_REQUEST['graduationcourse'];
        $graduationbranch = $_REQUEST['graduationbranch'];
        $graduationboard= $_REQUEST['graduationboard'];
        $graduationcollege= $_REQUEST['graduationcollege'];
        $graduationyop= $_REQUEST['graduationyop'];
        $gmarks= $_REQUEST['gmarks'];
        $graduationpercentage= $_REQUEST['graduationpercentage'];

        $intercourse= $_REQUEST['intercourse'];
        $interbranch= $_REQUEST['interbranch'];
        $interboard= $_REQUEST['interboard'];
        $intercollege= $_REQUEST['intercollege'];
        $interyop= $_REQUEST['interyop'];
        $intermarks= $_REQUEST['intermarks'];
        $interpercentage= $_REQUEST['interpercentage'];

        $sslccourse= $_REQUEST['sslccourse'];
        $sslcbranch= $_REQUEST['sslcbranch'];
        $sslcboard= $_REQUEST['sslcboard'];
        $sslccollege= $_REQUEST['sslccollege'];
        $sslcyop= $_REQUEST['sslcyop'];
        $sslcmarks= $_REQUEST['sslcmarks'];
        $sslcpercentage= $_REQUEST['sslcpercentage'];

        $HE=$_REQUEST['HE'];
        $higherstudiesdetails=$_REQUEST['higherstudiesdetails'];
        $appointment= $_REQUEST['appointment'];
        $appointmentdetails= $_REQUEST['appointmentdetails'];
        $criminaloffence= $_REQUEST['offence'];

        $gatescore=$_REQUEST['gatescore'];
        $pwdcertificatenumber = $_REQUEST['pwdcertificatenumber'];
        $pwdissuedate = $_REQUEST['pwdissuedate'];




    
        // $qualificationname= $_REQUEST['qualificationname'];
        // $qualificationjoiningdate= $_REQUEST['qualificationjoiningdate'];
        // $qualificationpassingdate= $_REQUEST['qualificationpassingdate'];


        // $qualificationpercentage= $_REQUEST['qualificationpercentage'];
        // $qualificationbranch= $_REQUEST['qualificationbranch'];
        // $qualificationcollege= $_REQUEST['qualificationcollege'];
        // $gatescore= $_REQUEST['gatescore'];
        // $higherstudies= $_REQUEST['HE'];
        // $higherstudiesdetails= $_REQUEST['higherstudiesdetails'];
        


       


        
        // $passphoto_name=($_FILES[$passphoto]['type']);

        // $passphoto_name = $_FILES['passphoto']['name'];
        // $passphoto_type=$_FILES[$passphoto]['type'];
        // $passphoto_data = file_get_contents($_FILES[$passphoto]['tmp_name']);

        // echo $passphoto_type;
        
        

        // $certificates = $_REQUEST['allCertificates'];//allcertificates
         
        // Performing insert query execution
        // here our table name is college
        // echo $passphoto_data;

        //  mothername, nationality, category, maritalstatus,
        //                         email,feerelaxation,feerelaxationby,disability,
        //                         typeofdisability, pwdpercentage, exservice, yearsofexservice, centralemployee
        //                         cpriemployee, minority, minoritydetails, permanentaddress,
        //                         postappliedfor, currentaddress

        //                         ?,?,?,?,?,
        //                         ?,?,?,?,
        //                         ?,?,?,?,?,
        //                         ?,?,?,?,
        //                         ?,?

        




        $sql1 = $dbh->prepare("INSERT INTO eo_applications(
                                advertisement, applicationName, mobile, dob, 
                                passphoto_name, passphoto_mime, passphoto_data,
                                sign_name, sign_mime, sign_data,  
                                ssccertificate_name, ssccertificate_mime, ssccertificate_data,
                                certificates_name, certificates_mime, certificates_data,
                                gatescorecard_name, gatescorecard_mime, gatescorecard_data, gender,
                                fathername, mothername, nationality, category, maritalstatus, email, 
                                feerelaxation, feerelaxationby, disablity, typeofdisability, percentageofdisability,
                                exservice, yearsofexservice, centralemployee, cpriemployee, minority,
                                minoritydetails, permanentaddress, postappliedfor, currentaddress, 
                                graduationcourse, graduationbranch, graduationboard, graduationcollege, graduationyop, gmarks, graduationpercentage,                                 
                                intercourse, interbranch, interboard, intercollege, interyop, intermarks, interpercentage,
                                sslccourse, sslcbranch, sslcboard, sslccollege, sslcyop, sslcmarks, sslcpercentage,
                                higherstudies ,higherstudiesdetails ,appointment ,appointmentdetails , criminaloffence,
                                gatescore   , pwdcertificatenumber ,pwdissuedate                             
                                
                                
                                )
                                values (
                                ?,?,?,?,
                                ?,?,?,
                                ?,?,?,
                                ?,?,?,
                                ?,?,?,
                                ?,?,?,?,
                                ?,?,?,?,?,?,
                                ?,?,?,?,?,
                                ?,?,?,?,?,
                                ?,?,?,?,
                                ?,?,?,?,?,?,?,
                                ?,?,?,?,?,?,?,
                                ?,?,?,?,?,?,?,
                                ?,?,?,?,?,
                                ?,?,?
                                )"); 

// $sql1 = $dbh->prepare("INSERT INTO eo_applications(passphoto_name, passphoto_mime, passphoto_data) 
// values (?,?,?)"); 
        
        $sql1->bindParam(1,$advertisement_Number);
        $sql1->bindParam(2,$application_name);
        $sql1->bindParam(3,$mobile);        
        $sql1->bindParam(4,$dob);

        $sql1->bindParam(5,$passphoto_name);
        $sql1->bindParam(6,$passphoto_type);
        $sql1->bindParam(7,$passphoto_data);
        
        $sql1->bindParam(8,$sign_name);
        $sql1->bindParam(9,$sign_mime);
        $sql1->bindParam(10,$sign_data);
        
        $sql1->bindParam(11,$ssccertificate_name);
        $sql1->bindParam(12,$ssccertificate_mime);
        $sql1->bindParam(13,$ssccertificate_data);
        
        $sql1->bindParam(14,$certificates_name);
        $sql1->bindParam(15,$certificates_mime);
        $sql1->bindParam(16,$certificates_data);
        
        $sql1->bindParam(17,$gatescorecard_name);
        $sql1->bindParam(18,$gatescorecard_mime);
        $sql1->bindParam(19,$gatescorecard_data);
        $sql1->bindParam(20,$gender);

        $sql1->bindParam(21,$fathername);
        $sql1->bindParam(22,$mothername);
        $sql1->bindParam(23,$nationality);
        $sql1->bindParam(24,$category);
        $sql1->bindParam(25,$maritalstatus);

        
        
        $sql1->bindParam(26,$email);
        $sql1->bindParam(27,$feerelaxation);
        $sql1->bindParam(28,$feerelaxationby);        
        $sql1->bindParam(29,$disability);

              
        $sql1->bindParam(30,$typeofdisability);      
        $sql1->bindParam(31,$pwdpercentage);      
        $sql1->bindParam(32,$exservice);      
        $sql1->bindParam(33,$yearsofexservice);      
        $sql1->bindParam(34,$centralemployee);

           
        $sql1->bindParam(35,$cpriemployee);   
        $sql1->bindParam(36,$minority);   
        $sql1->bindParam(37,$minoritydetails);   
        $sql1->bindParam(38,$permanentaddress);

        
        $sql1->bindParam(39,$postappliedfor);
        $sql1->bindParam(40,$currentaddress);



        $sql1->bindParam(41,$graduationcourse);      
        $sql1->bindParam(42,$graduationbranch);      
        $sql1->bindParam(43,$graduationboard);      
        $sql1->bindParam(44,$graduationcollege);      
        $sql1->bindParam(45,$graduationyop);
        $sql1->bindParam(46,$gmarks);
        $sql1->bindParam(47,$graduationpercentage);




        $sql1->bindParam(48,$intercourse);      
        $sql1->bindParam(49,$interbranch);      
        $sql1->bindParam(50,$interboard);      
        $sql1->bindParam(51,$intercollege);      
        $sql1->bindParam(52,$interyop);
        $sql1->bindParam(53,$intermarks);
        $sql1->bindParam(54,$interpercentage);




        $sql1->bindParam(55,$sslccourse);      
        $sql1->bindParam(56,$sslcbranch);      
        $sql1->bindParam(57,$sslcboard);      
        $sql1->bindParam(58,$sslccollege);      
        $sql1->bindParam(59,$sslcyop);
        $sql1->bindParam(60,$sslcmarks);
        $sql1->bindParam(61,$sslcpercentage);

        
        $sql1->bindParam(62,$HE);        
        $sql1->bindParam(63,$higherstudiesdetails);
        $sql1->bindParam(64,$appointment);
        $sql1->bindParam(65,$appointmentdetails);
        $sql1->bindParam(66,$criminaloffence);
        
        $sql1->bindParam(67,$gatescore);
        $sql1->bindParam(68,$pwdcertificatenumber);
        $sql1->bindParam(69,$pwdissuedate);
        








        
        
        $sql1->execute();


        // $sql2 = $dbh->prepare("SELECT applicationid from  eo_applications where mobile='$mobile'");

        // $consta= $sql2->execute();

        // echo $consta;
        $conn = mysqli_connect("localhost", "root", "", "recruitment");

        $sql2 = "SELECT * FROM eo_applications where mobile='$mobile'";
        $result = mysqli_query($conn, $sql2);

        if (mysqli_num_rows($result) > 0) 
        {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) 
        {
                if($row["applicationid"]<10)
                {        
                echo "<p>Your application is submitted successfully, 
                please make a note of your application id for further communication.</p><p>applicationid: EO000"
                . $row["applicationid"]. "</p><br>";
                echo "<a target='_blank' href='generate-pdf.php?id=".$row['applicationid']."'>Download Application form here".$row['applicationid']."</a>";

                }
                
                else if($row["applicationid"]<100)
                        {        
                          echo "<p>Your application is submitted successfully, 
                                please make a note of your application id for further communication.</p><p>applicationid: EO000"
                                . $row["applicationid"]. "</p><br>";
                          echo "<a target='_blank' href='generate-pdf.php?id=".$row['applicationid']."'>Download Application form here".$row['applicationid']."</a>";

                        }
                
                else if($row["applicationid"]<1000)
                        {        
                                
                                echo "<table><tr>Your application is submitted successfully, please
                                make a note of your application id for further communication.
                                </p><p>applicationid: EO0" . $row["applicationid"]. "</tr></table>";
                                echo "<a target='_blank' href='generate-pdf.php?id=".$row['applicationid']."'>Download Application form here".$row['applicationid']."</a>";

                        }
                
                else if($row["applicationid"]<10000)
                        {        
                                echo "<p>Your application is submitted successfully, please
                                make a note of your application id for further communication.
                                </p><p>applicationid: EO" . $row["applicationid"]. "</p>";
                                echo "<a target='_blank' href='generate-pdf.php?id=".$row['applicationid']."'>Download Application form here".$row['applicationid']."</a>";

                        }     


         
                else {
                echo "0 results";
                }
        }
        }




        

        // $sql = "INSERT INTO eo_applications (advertisementNumber, applicationName, mobile, passphoto_name,passphoto_mime,passphoto_data, dob) 
        //  VALUES ('$advertisement_Number','$application_name','$mobile','$passphoto_name','$passphoto_type','$passphoto_data','$dob')";
         
        //  echo "Hello world!"; 
        // if(mysqli_query($conn, $sql1)){
        //     echo "<h3> data stored in a database successfully. Please browse your localhost php my admin to view the updated data </h3>";
 
        //     echo nl2br("\n$advertisement_Number\n $application_name\n "
        //         . " $mobile\n $dob\n $passphoto\n $dob\n $dob");
        // } else{
        //     echo "ERROR: Hush! Sorry $sql1. "
        //         . mysqli_error($conn);
        // }
        // echo "<br> <a href='/rec/recruitment.php'>Go back to application form</a>";
        // Close connection
        }
// CloseCon($conn);

?>

</body>