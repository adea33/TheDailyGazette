document.addEventListener("DOMContentLoaded");

function validimi() {
    let cRegex = /^\d{16}$/;
    let cvcRegex = /^\d{3,}$/;

    var cardNumber = document.getElementById('cardNumber').value;
    var cvc = document.getElementById('cvc').value;

    if (!cRegex.test(cardNumber)) {
        alert("Numri i karteles nuk eshte valid");
        return;
    } else if (!cvcRegex.test(cvc)) {
        alert("CVC nuk eshte valid");
        return;
    } else {
        alert("Keni subscribe me sukses");
        return;
    }
}