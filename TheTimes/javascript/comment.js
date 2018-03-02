function commentFocus(){
  var numChars = 3000;
  var commentForm = document.getElementById("commentForm");
  var commentBox = document.getElementById("commentBox");
  if(commentBox.modified==null){
    commentBox.value="";
  }
  if(commentForm.added == null){ 
    var toConcat1 = '<p>Characters Remaining: <span id="remChars">'
    toConcat1 = toConcat1 + (numChars - commentBox.value.length);
    toConcat1 += '</span><br>';
    var toConcat2 = '<input type="text" name="fullName" value="Full Name" onfocus="focusInp(this)" onblur="blurInp(this)" onkeyup="keyUp(this)" id="fullName"><input type="text" name="city" value="City" onfocus="focusInp(this)" onblur="blurInp(this)" onkeyup="keyUp(this)" id="city"><br>'
    var toConcat3 = '<input type="submit" name="submitComment" value="POST" id="submitComment"></p>';
    var toConcat = toConcat1 + toConcat2 + toConcat3 ;
    commentForm.added = 1;
    commentForm.innerHTML = commentForm.innerHTML + toConcat ;
    document.getElementById("fullName").message = "Full Name";
    document.getElementById("city").message = "City";
  }
}

function commentBlur(){
  commentForm = document.getElementById("commentForm");
  if(commentBox.modified == null || commentBox.value ==""){
    commentBox.value = "Add your comment here";
    commentBox.style.color = "#777";
    commentBox.modified=null;
  }
}

function commentChange(){
  //console.log("entered commentChange");
  var numChars = 3000;
  var commentBox = document.getElementById("commentBox");
  commentBox.style.color="black";
  commentBox.modified = true;
  var remChars = numChars - commentBox.value.length;
  var remCharsSpan = document.getElementById("remChars");
  //console.log("rem chars:"+remChars);
  if(remChars>=0){
    remCharsSpan.innerHTML = remChars;
  }
  else{
    remCharsSpan.innerHTML = '0';
    commentBox.value = commentBox.value.substring(0,300);
  }
  //console.log("out of commentChange");
}

function focusInp(ob){
  //console.log("in focus func");
  if(ob.modified==null){
    ob.value="";
  }
}

function blurInp(ob){
  if(ob.modified==null || ob.value==""){
    ob.value=ob.message;
    ob.style.color="#777";
    ob.modified=null;
  }
}

function keyUp(ob){
  ob.style.color="black";
  ob.modified=true;
}

function formValidate(){
  var commentBox = document.forms["commentForm"]["commentBox"];
  var fullName = document.forms["commentForm"]["fullName"];
  var city = document.forms["commentForm"]["city"];
  var errors = document.getElementById("errors");
  errors.innerHTML = "";
  var valid = true;
  if(commentBox.value=="" || commentBox.value=="Add your comment here"){
    errors.innerHTML += '<p>Please enter your comment</p>';
    valid = false;
  }
  if(fullName.value=="" || fullName.value==fullName.message){
    errors.innerHTML += '<p>Fill out your name</p>';
    valid = false;
  }
  if(city.value=="" || city.value==city.message){
    errors.innerHTML += '<p>Fill out your city</p>';
    valid = false;
  }
  return valid;
}