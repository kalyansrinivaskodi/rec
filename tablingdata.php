<?php

?>
<!DOCTYPE html>
<html>
<head>
   <style>
   	input{
   	    margin: 8px;
   	}
   </style>
</head>
<body>
    
    <form action="kingu.php" method="POST">
	<h2>Add more columns on button click:</h2>
    <label for="noofcols">Total No of Fields you want to see:</label>
    <input type="text" name="noofcols" id="noofcols" value=1 readonly>
    <br>
    <label> Field 1(mandatory):</label>
    <input type="text" name="selection1" value="applicationid" readonly >

	<div id='input-cont'>
        <!--Input container-->
    </div>
    <input type="button" onclick='addInput()' value="add one more Field">
    
        <script>
            let c=1;
            function addInput()
            {
            var values = ["applicationName", "dob", "mobile", "email","passphoto","sign","X/SSC/SSLC","GateScoreCard"];
            c=c+1;
            var numb = document.getElementById("noofcols");
            numb.value=c;
            

            var select = document.createElement("select");
            // select.name = "applicant_field";
            select.id = "applicant_field";
            select.name="selection"+c;
            select.value=55;

            for (const val of values)
            {
                var option = document.createElement("option");
                option.value = val;
                option.text = val.charAt(0).toUpperCase() + val.slice(1);
                select.appendChild(option);
            }

            var label = document.createElement("label");
            label.innerHTML = "Field    "+c+" of applicant to show: ";
            label.htmlFor = "applicant_field";
            var br = document.createElement("br");

            document.getElementById("input-cont").appendChild(label).appendChild(select);
            document.getElementById("input-cont").appendChild(br);
            }
        </script>
        <input type="submit" name="submit" />
    </form>
</body>
</html>