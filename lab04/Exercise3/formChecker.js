function check() {
  let email = checkEmail(document.getElementsByClassName("username").value);
  let pas=checkpas(document.getElementsByClassName("password").value);
  let numShoe=numCheck(document.getElementsByClassName("shoe").value);
  let numCloth=numCheck(document.getElementsByClassName("cloth").value);
  let numHat=numCheck(document.getElementsByClassName("hat")).value);
  let shipping=checkBox(getshipping());

  if(email&&pas&&numShoe&&numCloth&&numHat&&shipping){
    return true;
  }
  else{
    return false;
  }

}

function checkNum(number){
  if(number>=0){
    return true;
  }
  else{
    alert("The quantity of that item should greater than 0");
    return false;
  }
}

function checkShip(){
  let count=0;
  let method=document.getElementsByClassName("shipping");
  for(let i=0;i<method.length;i++){
    if(method[i].checked){
      count=method[i].value;
      break;
    }
  }
  return count;
}

function check
