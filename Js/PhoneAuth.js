window.onload=function() {
    render();
};

function render() {
    window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
}

function phoneAuth() {
    // Get The Number
    var number=document.getElementById('phone').value;


    firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult){
        window.confirmationResult=confirmationResult;
        coderesult=confirmationResult;
        console.log(coderesult);
        alert("Message Sent");

    }).catch(function(error) {
        alert(error.message);
});
}

function codeVerify() {
    var code=document.getElementById('otp').value;
    coderesult.confirm(code).then(function (result) {
        alert("Mobile Number Verified");
        var user=result.user;
        console.log(user);
    }).catch(function(error) {
        alert(error.message);
    });
}