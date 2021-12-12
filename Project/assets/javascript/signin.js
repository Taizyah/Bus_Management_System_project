
$(document).ready(function(){

    const emailInput = document.getElementById('company-email');
    const passwordInput = document.getElementById('company-password');
    const errorDisplay = document.getElementById('error-display');

    $("#sign-in-btn").click(function(target){

        $.post({
            url: "./../api/login.php",
            data:{
                username: emailInput.value,
                password: passwordInput.value
            },
            success: function(data){
                const responseObject = JSON.parse(data);
                const responseMessage = responseObject["message"];
                if(responseMessage === "failed"){
                    alert("No users exeh!!! try other cerdentials bally...");
                }
                else{
                    const userId = responseMessage["id"];
                    const name = responseMessage["name"];
                    window.location.href = `./../public/dashboard.view.php?userid=${userId}&name=${name}`;
                }
            }
        })

    });

});


