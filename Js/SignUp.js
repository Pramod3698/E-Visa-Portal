function createUser() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("conpassword").value;
    

    console.log(password);
    console.log(confirmPassword);

    // Validate That Both Passwords are Same
    if(password==confirmPassword) {

        // Create Account
        firebase.auth().createUserWithEmailAndPassword(email,password).then(function (){
            // This Function executes when account is successfully created

            window.location="about-evisa.php";

        }).catch(function (error){
            //

            var errorMessage=error.message;
            alert(errorMessage);

        })
    }
    else {

        // Alert When Password did not matches
        alert("Password does not match");
    }

}