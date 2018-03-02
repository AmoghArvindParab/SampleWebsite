function checkEmail(x) {
var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");
if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
return false;
}
return true;
}

function formValidate(){
  //console.log("validation entered");
  valid = true;
  var email = document.forms["subscriptionForm"]["email"];
  var emailErr = document.getElementById("emailError");
  var inputs = document.getElementsByTagName('input');
  var sectionsError = document.getElementById("sectionsError");
  emailError.innerHTML="";
  if(checkEmail(email.value)==false){
    emailErr.innerHTML = "Invalid email address";
    valid = false;
  }
  if(email.value == ""){
    emailErr.innerHTML = "Can't be empty";
    valid = false;
  }
  var num=0;
  sectionsError.innerHTML = "";
  for(i=0;i<inputs.length;i++){
    if (inputs[i].type == 'checkbox'){
      if(inputs[i].checked){
        num+=1;
        break;
      }
    }
  }
  if(num==0){
    valid = false;
    //console.log("here");
    sectionsError.innerHTML = '<p id="sectionErr">Select atleast one section</p>';
  }
  //console.log("validation returning:"+valid);
  return valid;
}