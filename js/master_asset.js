function ageCalculator() {  
    var userinput = document.getElementById("DOB").value;  
    var dob = new Date(userinput);  
    if(userinput==null || userinput=='') {  
      document.getElementById("message").value = "**Choose a date please!";    
      return false;   
    } else {  
      
    //calculate month difference from current date in time  
    var month_diff = Date.now() - dob.getTime();  
      
    //convert the calculated difference in date format  
    var age_dt = new Date(month_diff);   
      
    //extract year from date      
    var year = age_dt.getUTCFullYear();  
      
    //now calculate the age of the user  
    var age = Math.abs(year - 1970);  
      
    //display the calculated age  
    return  document.getElementById("age").innerHTML = "Age is: " + age + " years. ";  
    }  
}  

function validateName(){
    var userName = document.getElementById("applicantName").value;
    if(userName.length === 0){
        producePrompt("Name is required", "anerror", "red","usernames");
        return false;
    }
	//var patt = /^[A-za-z][A-za-z\s.]*$/g;
	//var result = patt.test(userName);
    if(!userName.match(/^[A-za-z][A-za-z\s.]*$/)){	//     ^\w+( \w+)*$    /^[A-za-z\s]+$/
	//if(!result){  
        producePrompt("Please enter valid name", "anerror", "red", "usernames");
        return false;
    }
	producePrompt("", "anerror", "green", "usernames");
        return true;
}

function validateFName(){
    var userName = document.getElementById("fathername").value;
    if(userName.length === 0){
        producePrompt("Father Name is required", "fnerror", "red","usernames");
        return false;
    }
	//var patt = /^[A-za-z][A-za-z\s.]*$/g;
	//var result = patt.test(userName);
    if(!userName.match(/^[A-za-z][A-za-z\s.]*$/)){	//     ^\w+( \w+)*$    /^[A-za-z\s]+$/
	//if(!result){  
        producePrompt("Please enter valid name", "fnerror", "red", "usernames");
        return false;
    }
	producePrompt("", "fnerror", "green", "usernames");
        return true;
}

function validateMName(){
    var userName = document.getElementById("mothername").value;
    if(userName.length === 0){
        producePrompt("Mother Name is required", "mnerror", "red","usernames");
        return false;
    }
	//var patt = /^[A-za-z][A-za-z\s.]*$/g;
	//var result = patt.test(userName);
    if(!userName.match(/^[A-za-z][A-za-z\s.]*$/)){	//     ^\w+( \w+)*$    /^[A-za-z\s]+$/
	//if(!result){  
        producePrompt("Please enter valid name", "mnerror", "red", "usernames");
        return false;
    }
	producePrompt("", "mnerror", "green", "usernames");
        return true;
}


function validateMobile(){
    var userName = document.getElementById("mobile").value;
    if(userName.length === 0){
        producePrompt("Mobile Number is required", "mobileerror", "red","usernames");
        return false;
    }
	//var patt = /^[A-za-z][A-za-z\s.]*$/g;
	//var result = patt.test(userName);
    if(!userName.match(/^[0-9][0-9\s.]*$/)){	//     ^\w+( \w+)*$    /^[A-za-z\s]+$/
	//if(!result){  
        producePrompt("Please enter valid Mobile Number", "mobileerror", "red", "usernames");
        return false;
    }
    if(userName.length > 10){
        producePrompt("Please type only 10 digit mobile number", "mobileerror", "red","usernames");
        return false;
    }
    
	producePrompt("", "mobileerror", "green", "usernames");
        return true;
}

function validateDept(){
    var deptName=document.getElementById("department").value;
    if(deptName === "select"){
        producePrompt("Please select department name", "deperror", "red","department");
        return false;
    }
	producePrompt("", "deperror", "green", "department");
        return true;
}

function validateCat(){
    var cat=document.getElementById("category").value;
    if(cat === "select"){
        producePrompt("Please select asset category", "dserror", "red","category");
        return false;
    }
	producePrompt("", "dserror", "green", "category");
        return true;
}

function validateSerial()
{ 
	var serName = document.getElementById("serialno").value;
    if(serName.length === 0){
        producePrompt("Serial No is required", "snerror", "red","serialno");
        return false;
    }
	//var patt = /^[A-za-z][A-za-z\s.]*$/g;
	//var result = patt.test(userName);
    if(!serName.match(/^[0-9a-zA-Z]+$/)){	//     ^\w+( \w+)*$    /^[A-za-z\s]+$/
	//if(!result){  
        producePrompt("Please enter valid Serial No", "snerror", "red", "serialno");
        return false;
    }
  producePrompt("", "snerror", "green","serialno");
    return true;
}

function validateMake(){
    var userName = document.getElementById("make").value;
    if(userName.length === 0){
        producePrompt("Make is required", "merror", "red","make");
        return false;
    }
	//var patt = /^[A-za-z][A-za-z\s.]*$/g;
	//var result = patt.test(userName);
    if(!userName.match(/^[A-za-z][A-za-z\s.]*$/)){	//     ^\w+( \w+)*$    /^[A-za-z\s]+$/
	//if(!result){  
        producePrompt("Please enter valid details", "merror", "red", "make");
        return false;
    }
	producePrompt("", "merror", "green","make");
    return true;
   
}

function validateModel(){
    var userName = document.getElementById("model").value;
    if(userName.length === 0){
        producePrompt("Model is required", "mderror", "red","model");
        return false;
    }
	//var patt = /^[A-za-z][A-za-z\s.]*$/g;
	//var result = patt.test(userName);
    if(!userName.match(/^[0-9A-za-z][0-9A-za-z\s.]*$/)){	//     ^\w+( \w+)*$    /^[A-za-z\s]+$/
	//if(!result){  
        producePrompt("Please enter valid details", "mderror", "red", "model");
        return false;
    }
	producePrompt("", "mderror", "green","model");
    return true;
   
    
}


function validateWarranty(){
    var cat=document.getElementById("warranty").value;
    if(cat === "select"){
        producePrompt("Please select Warranty", "werror", "red","warranty");
        return false;
    }
	producePrompt("", "werror", "green", "warranty");
        return true;
}

function validateRamsize(){
    var cat = document.getElementById("ramsize").value;
    if(cat === "select"){
        producePrompt("Please select RAM Size", "ramerror", "red","ramsize");
        return false;
    }
	producePrompt("", "ramerror", "green", "ramsize");
        return true;
}

function validateHarddisk(){
    var cat = document.getElementById("harddisk").value;
    if(cat === "select"){
        producePrompt("Please select Hard Disk", "hderror", "red","harddisk");
        return false;
    }
	producePrompt("", "hderror", "green", "harddisk");
        return true;
    
}

function validateProcessor(){
    var cat=document.getElementById("processor").value;
    if(cat === "select"){
        producePrompt("Please select Processor", "prerror", "red","processor");
        return false;
    }
	producePrompt("", "prerror", "green", "processor");
        return true;
}

function validateOS(){
    var cat=document.getElementById("os").value;
    if(cat === "select"){
        producePrompt("Please select Operating System", "oserror", "red","os");
        return false;
    }
	producePrompt("", "oserror", "green", "os");
        return true;
}

function validateMMake(){
    var userName = document.getElementById("mmake").value;
    if(userName.length === 0){
        producePrompt("Make is required", "mmerror", "red","mmake");
        return false;
    }
	//var patt = /^[A-za-z][A-za-z\s.]*$/g;
	//var result = patt.test(userName);
    if(!userName.match(/^[0-9A-za-z][0-9A-za-z\s.]*$/)){	//     ^\w+( \w+)*$    /^[A-za-z\s]+$/
	//if(!result){  
        producePrompt("Please enter valid details", "mmerror", "red", "mmake");
        return false;
    }
	producePrompt("", "mmerror", "green","mmake");
    return true;
   
    
}

function validateMSerialNo(){
    var userName = document.getElementById("mserialno").value;
    if(userName.length === 0){
        producePrompt("Serial No is required", "mserror", "red","mserialno");
        return false;
    }
	//var patt = /^[A-za-z][A-za-z\s.]*$/g;
	//var result = patt.test(userName);
    if(!userName.match(/^[0-9A-za-z][0-9A-za-z\s.]*$/)){	//     ^\w+( \w+)*$    /^[A-za-z\s]+$/
	//if(!result){  
        producePrompt("Please enter valid details", "mserror", "red", "mserialno");
        return false;
    }
	producePrompt("", "mserror", "green","mserialno");
    return true;
   
    
}


function producePrompt(message, promptLocation, color,username){
    document.getElementById(promptLocation).innerHTML = message;
    document.getElementById(promptLocation).style.color = color;
    document.getElementById(username).style.borderColor = color;
}


function validateFormOnSubmit(){
return validateName()&& validateDept() && validateCat() && validateSerial() && validateMake() && validateModel() && validateWarranty() && validateRamsize() && validateHarddisk() && validateProcessor() && validateOS() && validateMMake() && validateMSerialNo();
}









