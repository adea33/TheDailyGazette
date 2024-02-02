document.addEventListener("DOMContentLoaded", function() {});

function validimi() {
    let nRegex=/^[A-Z][a-z]$/;
    let eRegex=/[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
    let lRegex=/^[A-Z][a-z]{3,20}$/;
    let passRegex=/^(?=.*[A-Z])(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    let cRegex = /^\d{16}$/;
    let cvcRegex = /^\d{3,}$/;


    var name=document.getElementById('name').value;
    var lastname=document.getElementById('lastname').value;
    var email=document.getElementById('email').value;
    var password=document.getElementById('password').value;
    var confirmpassword=document.getElementById('confirmpassword').value;
    var cardNumber = document.getElementById('cardNumber').value;
    var cvc = document.getElementById('cvc').value;
    var valide;

    if(!nRegex.test(name)){
        alert("Emri nuk eshte valid");
        window.location.href = "Subscribe.php";
        valide=false;
            return;
    }else if(!eRegex.test(email)){
        alert("Email nuk eshte valid");
        window.location.href = "Subscribe.php";
        valide=false;
        return;
    }
    else if(!lRegex.test(lastname)){
        alert("Shkruaj nje mbiemer valid");
        window.location.href = "Subscribe.php";
        valide=fals;
        return;
    }
    else if(!passRegex.test(password)){
        alert("Krijo nje fjalekalim me te forte! Fjalekalimi duhet te jete se paku 8 karaktere, te permbaje shkronja lowercase, uppercase dhe karaktere (@$!%*?).");
        window.location.href = "Subscribe.php";
        valide=false;
        return;
    }else if(confirmpassword.trim() !== password.trim()){
        alert("Passwordi duhet te jete i njejte");
        valide=false;
        window.location.href = "Subscribe.php";
        return;
    }else if (!cRegex.test(cardNumber)) {
        alert("Numri i karteles nuk eshte valid");
        window.location.href = "Subscribe.php";
        valide=false;
        return;
    } else if (!cvcRegex.test(cvc)) {
        alert("CVC nuk eshte valid");
        window.location.href = "Subscribe.php";
        valide=false;
        return;
    } else {
        alert("Keni subscribe me sukses");
        valide=true;
        return;
    }
}
