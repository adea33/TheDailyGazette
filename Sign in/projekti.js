document.addEventListener("DOMContentLoaded");

function validimi(){
    let nRegex=/^[A-Z][a-z]{3,8}$/;
    let eRegex=/[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
    let lRegex=/^[A-Z][a-z]{3,20}$/;
    let passRegex=/^[A-Za-z\d@$!%*?&]{8,}$/;
    
    var name=document.getElementById('name').value;
    var lastname=document.getElementById('lastname').value;
    var email=document.getElementById('email').value;
    var password=document.getElementById('password').value;
    var confirmpassword=document.getElementById('confirmpassword').value;
    

   if(!nRegex.test(name)){
    alert("Emri nuk eshte valid");
    return;
   }
   
   else if(!eRegex.test(email)){
    alert("Email nuk eshte valid");
    return;
   }
   else if(!lRegex.test(lastname)){
    alert("Shkruaj nje mbiemer valid");
    return;
   }
    else if(!passRegex.test(password)){
    alert("Krijo nje fjalekalim me te forte");
    return;
   }
   else if(confirmpassword.trim() !== password.trim()){
    alert("Passwordi duhet te jete i njejte");
    return;
   }
   else{
    alert("Jeni regjistruar me sukses!");
    return;
   }
}