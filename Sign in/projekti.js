document.addEventListener("DOMContentLoaded");
function validimi(){
    
    var name=document.getElementById('name').value;
    var lastname=document.getElementById('lastname').value;
    var email=document.getElementById('email').value;
    var password=document.getElementById('password').value;
    var confirmpassword=document.getElementById('confirmpassword').value;

    if( name==='' || lastname==='' || 
    email==='' || password==='' ||
    confirmpassword===''){
        alert('Please enter all the required fields!');
        return false;
    }
    else if(name.length<3){
        alert('Shkruaj nje emer valid');
        return false;
    }
    else if(lastname.length<3){
        alert('Shkruaj nje mbiemer valid');
        return false;
    }
    else if(password !==confirmpassword){
        alert('Passwordi duhet te jete i njejte!');
        return false;
    }
    else if(!(email.includes("@")) ){
        alert('Shkruani nje email valide!');
        return false;
    }
    else{
        alert('Ju u loguat me sukses');
        return true;
    }

   
   


}
