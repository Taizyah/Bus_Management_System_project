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
        if(!isMatchedPassword(password, confirmPassword)){
            showError(errorDisplay, "Passwords do not match");
            return;
        }

        $.ajax({
            type: "POST",
            url: "./../api/signup.php",
            data: {
                company_name: name.value,
                company_address: address.value,
                company_email: email.value,
                company_phone: phone.value,
                company_password: password.value
            },
            success: function(result){
                const object = JSON.parse(result);
                const message = object["message"];
                if(message === "success"){
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

function showError(component, message){
    component.innerHTML = message;
    component.style.visibility = 'visible';
    setTimeout(function(){
        component.style.visibility = 'hidden';
    }, 5000);

}