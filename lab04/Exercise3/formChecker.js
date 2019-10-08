function formChecker() {
  let email = document.getElementsByClassName("username").value;
  let pas=document.getElementsByClassName("password").value;
  let numShoe=document.getElementsByClassName("shoe").value;
  let numCloth=document.getElementsByClassName("cloth").value;
  let numHat=document.getElementsByClassName("hat").value;
  let shipping=document.getElementsByClassName("shipping").checked;

  if(numShoe<0 || numCloth<0 || numHat<0){
    alert("The quantity of that item should greater than 0");
    return false;
  }
  if(shipping==false){
    alert("You have to choose a shipping method");
    return false;
  }
  if(pas==null){
    alert("Password not long enough");
    return false;
  }
  if(!email.include("@")){
    alert("Email format is not correct");
    return false;
  }
else{
  return true;
}
}
