// login
function displayPass() {
  var x = document.getElementById("passwordLogin");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function displayConfirmPass() {
  var x = document.getElementById("confirm-password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

//   register
function switchDisplay(){
  var profilePic = document.getElementById("submitProfilePicture");
  var pInfo =  document.getElementById("personalInfo");
  
  if(profilePic.style.display === "none" || pInfo.style.display === "block")
  {
    profilePic.style.display = "block";
    pInfo.style.display = "none";

  }
  else if(profilePic.style.display === "block" || pInfo.style.display === "none")
  {
    profilePic.style.display = "none";
    pInfo.style.display = "block";
  }
}