function checkName() {
  if (document.getElementById("name").value == "") {
        document.getElementById("nameErr").innerHTML = "Name can't be blank";
        document.getElementById("nameErr").style.color = "black";
        document.getElementById("name").style.borderColor = "red";
  }else{
        document.getElementById("nameErr").innerHTML = "";
        document.getElementById("name").style.borderColor = "green";
  }
  
}

function checkUsername() {
    if (document.getElementById("username").value == "") {
          document.getElementById("usernameErr").innerHTML = "Username can't be blank";
          document.getElementById("usernameErr").style.color = "black";
          document.getElementById("username").style.borderColor = "red";
    }else{
          document.getElementById("usernameErr").innerHTML = "";
          document.getElementById("username").style.borderColor = "green";
    }
    
  }
 
function checkEmail() {
   
    if (document.getElementById("email").value == "") 
    {
          document.getElementById("emailErr").innerHTML = "Email can't be blank";
          document.getElementById("emailErr").style.color = "black";
          document.getElementById("email").style.borderColor = "red";
    }
   
    else
    {
        document.getElementById("emailErr").innerHTML = "";
        document.getElementById("email").style.borderColor = "green";
    }
    
  }

function checkPassword(){
   
    if (document.getElementById("password").value == "") 
    {
        document.getElementById("passwordErr").innerHTML = "Password can't be blank";
        document.getElementById("passwordErr").style.color = "black";
        document.getElementById("password").style.borderColor = "red";
    }
    else
    {
        document.getElementById("passwordErr").innerHTML = "";
        document.getElementById("password").style.borderColor = "green";
    }
    
  }

  function checkCpassword(){
   
    if (document.getElementById("cpassword").value == "") 
    {
          document.getElementById("cpasswordErr").innerHTML = "Password can't be blank";
          document.getElementById("cpasswordErr").style.color = "black";
          document.getElementById("cpassword").style.borderColor = "red";
    }
   
    else if(document.getElementById("cpassword").value != document.getElementById("password").value)
    {
        document.getElementById("cpasswordErr").innerHTML = "Does not match";
        document.getElementById("cpasswordErr").style.color = "black";
        document.getElementById("cpassword").style.borderColor = "red";
    }
    else
    {
        document.getElementById("cpasswordErr").innerHTML = "";
        document.getElementById("cpassword").style.borderColor = "green";
    }
    
  }

