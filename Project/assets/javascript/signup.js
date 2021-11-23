$(document).ready(function(){

    const name = document.querySelector("#company-name");
    const address = document.querySelector("#company-address");
    const email = document.querySelector("#company-email");
    const phone = document.querySelector("#company-number");
    const password = document.querySelector("#company-password");
    const confirmPassword = document.querySelector("#confirm-password");

    const errorDisplay = document.querySelector("#error-display");

    
    $("#sign-up-btn").click(function(target){
        target.preventDefault();

        if(!isPasswordValid(password.value) || !isPasswordValid(confirmPassword.value)){
            showError(errorDisplay, "password field should have atleast 8 characters.");
            return;
        }

        if(!isMatchedPassword(password, confirmPassword)){
            showError(errorDisplay, "passwords do not match");
            return;
        }


        $.ajax({
            type: "POST",
            url: "./../api/signup.php",
            data: {
                name: name.value,
                address: address.value,
                email: email.value,
                phone: phone.value,
                password: password.value
            },
            success: function(result){
                const response = JSON.parse(result);
                const responseMessage = response["message"];
                if(responseMessage === "success"){
                    window.location.href = './../public/request.html';
                }
            }
        })

    });

});



function isMatchedPassword(password, confirmPassword){
    if(password.value === confirmPassword.value){
        return true;
    }
    return false;
}

function isPasswordValid(password){
    if(password.length >= 8){
        // Create a RegEx to check if the password has atleast 1 uppercase, 1 lowercase and a number in it, otherwise it does not pass the requirement
        return true;
    }
    return false;
}

function showError(component, message){
    component.innerHTML = message;
    component.style.visibility = 'visible';
    setTimeout(function(){
        component.style.visibility = 'hidden';
    }, 5000);

}