
<?php

?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  /* width: 100%; */
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
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
</style>


<body>

<form id="regForm" action="htmltodb.php" method="post">
  <h1>Register:</h1>

  <div class="advertisementNumber">
      <label for="advertisementNumber">1. Advertisement Number: 
      <input type="text" placeholder="Advertisement Number" id="advertisementNumber" oninput="this.className = ''" name="advertisementNumber" /></label>
    </div>

    <div>
      <label for="postName">2. Post Applied For/ Post Name</label> 
      <input type="text" placeholder="Post Applied For/ Post Name" id="postName" oninput="this.className = ''" name="postName">
    </div>

    <div>
      <label for="applicantName">3. Applicant Name</label> 
      <input type="text" placeholder="Applicant Name" id="applicantName" oninput="this.className = ''" name="applicantName">
    </div>

    <div>
      <label for="DOB">4. Date of Birth</label> 
      <input type="date" placeholder="dd-mm-yyyy" id="DOB" oninput="this.className = ''" name="DOB" onselect="$picker">
    </div>
    
    <div>
      <fieldset>
        <legend>5. Please select your Gender:</legend>
        <div>
          <input type="radio" id="male"
           name="gender" value="male">
          <label for="male">Male</label>
    
          <input type="radio" id="female"
           name="gender" value="female">
          <label for="female">Female</label>
    
          <input type="radio" id="other"
           name="gender" value="other">
          <label for="other">Other</label>
        </div>        
      </fieldset>
    </div>

    <div>
      <label for="fathername">6. Father's Name</label> 
      <input type="text" placeholder="Father's Name" id="fathername" oninput="this.className = ''" name="fathername">
    </div>

    <div>
      <label for="mothername">7. Mother's Name</label> 
      <input type="text" placeholder="Mother's Name" id="mothername" oninput="this.className = ''" name="mothername">
    </div>

    <div>
      <!-- <label for="nationality">Nationality</label> 
      <input type="text" placeholder="Nationality" id="nationality" oninput="this.className = ''" name="nationality"> -->
      <label for="nationality">8. Choose your Nationality:</label>
      <select name="nationality" id="nationality">
        <option value="none" selected disabled hidden>Select an Option</option>
        <option value="Indian">Indian</option>
        <option value="Others">Others</option>
      </select> 
    </div>

    <div>
      <label for="category">9. Choose your Catergory:</label>
      <select name="category" id="category"> 
        <option value="none" selected disabled hidden>Select an Option</option>
        <option value="UR">UR</option>
        <option value="EWS">EWS</option>
        <option value="OBC">OBC</option>
        <option value="SC">SC</option>
        <option value="ST">ST</option>
      </select> 
    </div>

    <div>
      <label for="maritalstatus">10. Choose your Catergory:</label>
      <select name="maritalstatus" id="maritalstatus"> 
        <option value="none" selected disabled hidden>Select an Option</option>
        <option value="Maried">Married</option>
        <option value="Unmaried">Unmaried</option>
      </select> 
    </div>

    <div>
      <label for="mobile">11. Mobile No.</label>       
      <input type="tel" name="mobile"  id="mobile" pattern="[0-9]{10}"  title="Ten digits mobile number" />    
      
    </div>

    <div>
      <label for="email">12. Email-ID</label>       
      <input type="email" name="email"  id="email" />          
    </div>

    
    <div>
      <fieldset>
        <legend>13. Are you eligible for fees relaxation as per Advertisement Notification:</legend>
        <div>
       

          <input type="radio" id="feerelaxationYes"
           name="feerelaxation" value="yes">  
          <label for="feerelaxationyes">Yes</label>
    
          <input type="radio" id="feerelaxationNo"
           name="feerelaxation" value="no" checked>
          <label for="feerelaxationno">No</label>
    
        </div>
        <div class="custom-select" id="frdropdown" style="display:none">
          <select class="row">
              <option value="0">Select Fee relaxation by:</option>
              <option value="1">Women</option>
              <option value="2">Ex-service Man</option>
              <option value="3">SC</option>
              <option value="4">ST</option>              
              <option value="5">CPRI Employee</option>
          </select>
        </div>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    
        <script type="text/javascript">
          $(function () {
              $("#feerelaxationYes").click(function () 
              {
                  if ($(this).is(":checked")) {
                      $("#frdropdown").show();
                  } else {
                      $("#frdropdown").hide();
                  }
              });
              $("#feerelaxationNo").click(function () 
              {
                  if ($(this).is(":checked")) {
                      $("#frdropdown").hide();
                  } else {
                      $("#frdropdown").show();
                  }
              });
          });
      </script>

        
      </fieldset>
    </div>

    <div>
      <fieldset>
        <legend>14. Person with disability:</legend>
        <div>
          <input type="radio" id="disabilityYes"
           name="disability" value="Yes">
          <label for="disabilityYes">Yes</label>
    
          <input type="radio" id="disabilityNo"
           name="disability" value="No" checked>
          <label for="disabilityNo">No</label>

          <div class="custom-select" id="disabilitydropdown" style="display:none">
            <label for="distype">15. Type of diability</label>
            <select class="row" id="distype">
                <option value="0"> PWD-OH</option>
                <option value="1"> Others</option>
            </select>
          </div>


          <div class="custom-select" id="pwddetails" style="display:none">

            <fieldset >
              <legend>16. Percentage of disability & certificate no & date of issue</legend>
              <div>
                
                <div>
                  <label for="pwdpercentage"> Percentage of disability </label> 
                  <input type="number" placeholder="Percentage of disability" id="pwdpercentage" oninput="this.className = ''" name="pwdpercentage">
                </div>
                <div>
                  <label for="pwdcertificate">certificate number & date of issue (This only incase of selected yes in sl.no </label> 
                  <input type="number" placeholder="Certificate Number" id="pwdcertificate" oninput="this.className = ''" name="pwdcertificate">
                </div>
                <div>
                  <label for="issuedate">date of issue (This only incase of selected yes in sl.no </label> 
                  <input type="number" placeholder="Issue date" id="issuedate" oninput="this.className = ''" name="issuedate">
                </div>
              </div>
            </fieldset>
          </div>

          <script type="text/javascript">
            $(function () {
                $("#disabilityYes").click(function () 
                {
                    if ($(this).is(":checked")) {
                        $("#disabilitydropdown").show();
                        $("#pwddetails").show();
                        
                    } else {
                        $("#disabilitydropdown").hide();
                        $("#pwddetails").hide();
                    }
                });
                $("#disabilityNo").click(function () 
                {
                    if ($(this).is(":checked")) {
                        $("#disabilitydropdown").hide();
                        $("#pwddetails").hide();
                    } else {
                        $("#disabilitydropdown").show();
                        $("#pwddetails").show();
                    }
                });
            });
        </script>
    
        </div>        
      </fieldset>
    </div>

    <div>
      <fieldset >
        <legend>17. Are you ex-service man</legend>
        <div>
          
          <input type="radio" id="exserviceYes"
           name="exservice" value="Yes">
          <label for="exserviceYes">Yes</label>
    
          <input type="radio" id="exserviceNo"
           name="exservice" value="No" checked>
          <label for="exserviceNo">No</label>

          <div class="custom-select" id="yos" style="display:none">
            <label for="yearsofservice">Number of years of service</label>
            <input type="number" placeholer="years of service" id="yearsofservice" name="yearsofservice">

          </div>
          
          <script type="text/javascript">
            $(function () {
                $("#exserviceYes").click(function () 
                {
                    if ($(this).is(":checked")) {
                        $("#yos").show();
                    } else {
                        $("#yos").hide();
                    }
                });
                $("#exserviceNo").click(function () 
                {
                    if ($(this).is(":checked")) {
                        $("#yos").hide();
                    } else {
                        $("#yos").show();
                    }
                });
            });
        </script>

        </div>
      </fieldset>
    </div>


    <div>
      <fieldset >
        <legend>18. Are you Central Government Employee with 3 years regular service</legend>
        <div>
          
          <input type="radio" id="empYes"
           name="emp" value="Yes">
          <label for="empYes">Yes</label>
    
          <input type="radio" id="empNo"
           name="emp" value="No" checked>
          <label for="empNo">No</label>
      </fieldset>
    </div>

    <div>
      <fieldset >
        <legend>19. Are you CPRI Employee with 3 years regular service</legend>
        <div>
          
          <input type="radio" id="cpriYes"
           name="cpri" value="Yes">
          <label for="cpriYes">Yes</label>
    
          <input type="radio" id="cpriNo"
           name="cpri" value="No" checked>
          <label for="cpriNo">No</label>
      </fieldset>
    </div>

    <div>
      <fieldset >
        <legend>20. Minority as per central Govt.</legend>
        <div>
          
          <input type="radio" id="minorityYes"
           name="minority" value="Yes">
          <label for="minorityYes">Yes</label>    
          <input type="radio" id="minorityNo"
           name="minority" value="No" checked>
          <label for="minorityNo">No</label>
          <div class="custom-select" id="minorityTA" style="display:none ;">
            <label for="minoritytext">details of minority status</label>
            <textarea placeholer="Details of minority status..." rows="4" cols="50" id="minoritytext" name="minoritytext" ></textarea>
          </div>
          <script type="text/javascript">
            $(function () {
                $("#minorityYes").click(function () 
                {
                    if ($(this).is(":checked")) {
                        $("#minorityTA").show();
                    } else {
                        $("#minorityTA").hide();
                    }
                });
                $("#minorityNo").click(function () 
                {
                    if ($(this).is(":checked")) {
                        $("#minorityTA").hide();
                    } else {
                        $("#minorityTA").show();
                    }
                });
            });
        </script>
      </fieldset>
    </div>


    <div>
      <label for="age">21. Age as on date of application closing date: </label>
      <div id="age"></div>
      <script type="text/javascript">
        var dtyear="2022", dtmonth="09", dtday="23";

        function calculateAge(date) 
        {
          const now = new Date();
          const diff = Math.abs(now - date );
          const age = Math.floor(diff / (1000 * 60 * 60 * 24 * 365)); 
          return age;
        }

        // var picker = new Pikaday({ 
        //     field: document.getElementById('DOB') ,
        //     yearRange:[1900,2020],
        //     onSelect: function(date) {
        //     let age = calculateAge(date);
        //     document.getElementById('age').innerHTML = "age: "+age ;
        //     }                        
        //   });

        // var inp = document.getElementById( 'DOB' ).val();
        // var d = new Date( inp );
        // var dobyear=d.getUTCFullYear();
        // // dobmonth=d.getMonth()+1;
        // // dobday=d.getDate();
        // document.write(dobyear);
      </script>   
    </div>


    <div>
      <label for="address">22. Address Correspondance</label>
      <textarea id="address" name="address" rows="5" cols="40"> </textarea>
    </div>

    
    <div>
      <label for="permanentaddress">23. Address Correspondance</label>
      <textarea id="permanentaddress" name="permanentaddress" rows="5" cols="40"> </textarea>
    </div>

    <div>
      <fieldset>
        <legend>24. Essential Qualification as per advertisement </legend>
        <div>
          <label for="qualification">Qualification Name:</label>
          <input type="text" id="qualification" name="qualification">
        </div>
        <div>
          <label for="joiningdate">Joining Date:</label>
          <input type="date" id="joiningdate" name="joiningdate">
        </div>

        <div>
          <label for="passingdate">Passing Date:</label>
          <input type="date" id="passingdate" name="passingdate">
        </div>

        <div>
          <label for="percentage">Percentage Date:</label>
          <input type="number" id="percentage" name="percentage">
        </div>

        <div>
          <label for="branch">Branch:</label>
          <input type="text" id="branch" name="branch">
        </div>

        <div>
          <label for="college">College:</label>
          <input type="text" id="college" name="college">
        </div>
      </fieldset>
    </div>

    <div>
      <fieldset>
        <legend>25. Additional Qualification</legend>
        <div>
          <label for="qualification2">Qualification Name:</label>
          <input type="text" id="qualification2" name="qualification2">
        </div>
        <div>
          <label for="joiningdate2">Joining Date:</label>
          <input type="date" id="joiningdate2" name="joiningdate2">
        </div>

        <div>
          <label for="passingdate2">Passing Date:</label>
          <input type="date" id="passingdate2" name="passingdate2">
        </div>

        <div>
          <label for="percentage2">Percentage Date:</label>
          <input type="number" id="percentage2" name="percentage2">
        </div>

        <div>
          <label for="branch2">Branch:</label>
          <input type="text" id="branch2" name="branch2">
        </div>

        <div>
          <label for="college2">College:</label>
          <input type="text" id="college2" name="college2">
        </div>
      </fieldset>
    </div>

    <div>
      <label for="gatescore">26. Valid Gate Score(2023/2022)-
      </label>
      <input type="number" min="1" max="999"/>
    </div>

    <div>
        <fieldset>
          <legend>27. Are you pursuing higher studies?</legend>
            <div>
              <input type="radio" id="HEYes"
              name="HE" value="Yes">
              <label for="HEYes">Yes</label>
        
              <input type="radio" id="HENo"
              name="HE" value="No" checked>
              <label for="HEYes">No</label>

              <div class="custom-select" id="HETA" style="display:none ;">
                <label for="highereducation">details of higher education</label>
                <textarea placeholer="Details of higher education..." rows="4" cols="50" id="highereducation" name="highereducation" ></textarea>

              </div>
          
              <script type="text/javascript">
                $(function () {
                    $("#HEYes").click(function () 
                    {
                        if ($(this).is(":checked")) {
                            $("#HETA").show();
                        } else {
                            $("#HETA").hide();
                        }
                    });
                    $("#HENo").click(function () 
                    {
                        if ($(this).is(":checked")) {
                            $("#HETA").hide();
                        } else {
                            $("#HETA").show();
                        }
                    });
                });
              </script>
          </div>          
        </fieldset>
      </div>

      <div>
        <fieldset>
          <legend>
            28. Details of Work Experience/Employment records
          </legend>
          <div>
            <label for="organisationname">1. Name of the Organisation</label>
            <input type="text" id="organisationname" name="organisationname" oninput="this.className = ''"><br>
            <label for="organisationtype">2. Type of the Organisation</label>
            <input type="text" id="organisationtype" name="organisationtype" oninput="this.className = ''"><br>
            <label for="employmenttype">3. Type of the Employment</label>
            <input type="text" id="employmenttype" name="employmenttype" oninput="this.className = ''"><br>
            <label for="designation">4. Designation</label>
            <input type="text" id="designation" name="designation" oninput="this.className = ''"><br>
            <label for="from">5. From</label>
            <input type="text" id="from" name="from" oninput="this.className = ''"><br>
            <label for="to">6. To</label>
            <input type="text" id="to" name="to" oninput="this.className = ''"><br>
            <label for="payscale">7. Pay Scale/Monthly salary</label>
            <input type="text" id="payscale" name="payscale" oninput="this.className = ''"><br>
            <label for="experience">8. Nature and area of experience</label>
            <input type="text" id="experience" name="experience" oninput="this.className = ''"><br>
          </div>
        </fieldset>
      </div>
      <div>
        <fieldset>
          <legend> Other Information</legend>
          <div>
            <fieldset>
              <legend>Have you applied for appointment elsewhere?</legend>
              <div>
              <input type="radio" id="appointmentYes"
              name="appointment" value="Yes">
              <label for="appointmentYes">Yes</label>
        
              <input type="radio" id="appointmentNo"
              name="appointment" value="No" checked>
              <label for="appointmentNo">No</label>
              </div>

              <div class="custom-select" id="appointmentTA" style="display:none ;">
                <label for="otherappointment">details of higher education</label>
                <textarea placeholer="Details of Other Appointment" rows="4" cols="50" id="otherappointment" name="otherappointment" ></textarea>

              </div>
          
              <script type="text/javascript">
                $(function () {
                    $("#appointmentYes").click(function () 
                    {
                        if ($(this).is(":checked")) {
                            $("#appointmentTA").show();
                        } else {
                            $("#appointmentTA").hide();
                        }
                    });
                    $("#appointmentNo").click(function () 
                    {
                        if ($(this).is(":checked")) {
                            $("#appointmentTA").hide();
                        } else {
                            $("#appointmentTA").show();
                        }
                    });
                });
              </script>
            </fieldset>
          </div>
          <div>
            <fieldset>
              <legend>Have you been convicted of any criminal offence?</legend>
              <div>
              <input type="radio" id="offenceYes"
              name="offence" value="Yes">
              <label for="offenceYes">Yes</label>
        
              <input type="radio" id="offenceNo"
              name="offence" value="No" checked>
              <label for="offenceNo">No</label>
              </div>

              <div class="custom-select" id="appointmentTA" style="display:none ;">
                <label for="otherappointment">details of higher education</label>
                <textarea placeholer="Details of Other Appointment" rows="4" cols="50" id="otherappointment" name="otherappointment" ></textarea>

              </div>
          
              <script type="text/javascript">
                $(function () {
                    $("#offenceYes").click(function () 
                    {
                        if ($(this).is(":checked")) {
                          document.getElementById("sbutton").disabled = true;
                        } else {
                          document.getElementById("sbutton").disabled = false;
                        }
                    });
                    $("#offenceNo").click(function () 
                    {
                        if ($(this).is(":checked")) {
                          document.getElementById("sbutton").disabled = false;
                        } else {
                          document.getElementById("sbutton").disabled = true;
                        }
                    });
                });
              </script>
            </fieldset>
          </div>
        </fieldset>
      </div>

      <div>
      <fieldset>
      <legend>
        Documents to be uploaded.
      </legend>
      <div>
      <label for="passphoto">31. Upload Photo</label>
      <input class="upload-file" type="file" accept="image/jpeg, image/png" id="passphoto" name="passphoto">
      <script>
          var uploadField = document.getElementById("passphoto");
          uploadField.onchange = function() {
              if(this.files[0].size > 140000){
                alert("File is too big!");
                this.value = "";
              };
          };
      </script>
      </div>
      
      <div>
      <label for="sign">32. Upload Signature</label>
      <input class="upload-file" type="file" accept="image/jpeg, image/png"id="sign" >
      <script>
          var uploadField = document.getElementById("sign");
          uploadField.onchange = function() {
              if(this.files[0].size > 500000){
                alert("File is too big!");
                this.value = "";
              };
          };
      </script>
      </div>

      <div>
      <label for="SSLC">33. Upload SSLC/SSC/Matric Certificate Pdf format only</label>
      <input class="upload-file" type="file" accept="application/pdf"id="SSLC" >
      <script>
          var uploadField = document.getElementById("SSLC");
          uploadField.onchange = function() {
              if(this.files[0].size > 220000){
                alert("File is too big!");
                this.value = "";
              };
          };
      </script>
      </div>

      <div>
      <label for="allCertificates">34. Upload Required Qualification Certificate & Caste/Category certificate(if applicable) PDF format - (BE/B.Tech Certificate/ITI/Diploma) </label>
      <input class="upload-file" type="file" accept="application/pdf"id="allCertificates" >
      <script>
          var uploadField = document.getElementById("allCertificates");
          uploadField.onchange = function() {
              if(this.files[0].size > 520000){
                alert("File is too big!");
                this.value = "";
              };
          };
      </script>
      </div>

      <div>
      <label for="gate">35. Upload GATE Score Card PDF format only</label>
      <input class="upload-file" type="file" accept="application/pdf"id="gate" >
      <script>
          var uploadField = document.getElementById("gate");
          uploadField.onchange = function() {
              if(this.files[0].size > 220000){
                alert("File is too big!");
                this.value = "";
              };
          };
      </script>
      </div>
      </fieldset>  
      </div>

      <div>
        <fieldset>
          <legend>36. Declaration</legend>
          <div>
            <input type="checkbox" id="declaration" required>
            <label for="declaration">
              I CERTIFY THAT THE INFORMATION FURNISHED ABOVE IN THE APPLICATION IS TRUE, COMPLETE AND CORRECT TO THE BEST OF MY KNOWLEDGE AND BELIEF.
              I UNDERSTAND THAT IN THE EVENT OF ANY INFORMATION GIVEN HEREIN, IS FOUND TO BE FALSE OR INCORRECT OR CONCEALED, MY CANDIDATURE WILL STAND CANCELLED AND
              CLAIMS FOR THE RECRUITMENT WILL STAND FORFEITED AND ANY CIVIL/CRIMINAL LEGAL ACTION CAN BE TAKEN AGAINST ME FOR THIS ACT.
            </label>
          </div>
        </fieldset>
      </div>
      <input type="submit" id="submit">  
    <br>



    </form>
    </body>
</html>
