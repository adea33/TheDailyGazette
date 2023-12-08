document.addEventListener("DOMContentLoaded", function() {
var subscribeForm = document.getElementById("subscribe");

subscribeForm.addEventListener("submit", function(event) {

event.preventDefault();


validimi();
});



function validimi() {
var cRegex = /\d{16,}$/;
var cvcRegex = /\d{3,}$/;
var accountRegex = /[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;

var cardNumber = document.getElementById('cardNumber').value;
var cvc = document.getElementById('cvc').value;
var account = document.getElementById('account').value;

if (!cRegex.test(cardNumber)) {
    alert("Numri i karteles nuk eshte valid");
} else if (!cvcRegex.test(cvc)) {
    alert("CVC nuk eshte valid");
} else if (!accountRegex.test(account)) {
    alert("Shkruaj nje account valid");
} else {
    alert("Keni subscribe me sukses");
}
}
});