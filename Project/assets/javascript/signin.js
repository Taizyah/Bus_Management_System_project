var emailInput = document.getElementById('company-email');
var passwordInput = document.getElementById('company-password');
var submitButton = document.getElementById('sign-in-btn');
var errorDisplay = document.getElementById('error-display');

submitButton.addEventListener('click', signIn);

function signIn(e) {
    e.preventDefault();
    if(!emailInput.value || !passwordInput.value) {
        errorDisplay.style.visibility = "visible";
        errorDisplay.innerHTML = "<span>Please fill out the form completely</span>"
    } else {
        return null
    }
}

