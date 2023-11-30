document.addEventListener("DOMContentLoaded");
function validimi(){
    
    var name=document.getElementById('name').value;
    var lastname=document.getElementById('lastname').value;
    var email=document.getElementById('email').value;
    var password=document.getElementById('password').value;
    var confirmpassword=document.getElementById('confirmpassword').value;

    if(name==='' || lastname==='' || 
    email==='' || password==='' ||
    confirmpassword===''){
        alert('Please enter all the required fields!');
        return false;
    }
    return true;


}