<div class="main2">

            <h1> Signup </h1>


            <form action="" enctype="multipart/form-data" method:"post">

                <div class="inputwrapper">
                    <label for="name" class="newline">Name</label>
                    <input type="text" name="Name" id="name" placeholder="Enter Your Name">
                

                    <label for="email" class="newline">Email</label>
                    <input type="email" name="Email" id="email" placeholder="Enter Your Email" required="required">
                </div>

                <div class="inputwrapper">
                
                    <label for="password" class="newline">Password</label>
                    <input type="password" name="Password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required
                     minlength="8" maxlength="18" placeholder="Enter Your Password" required="required">
                     <i class="material-icons" id="eye"> remove_red_eye </i>
                    <p>Must contain at least one number and one uppercase and lowercase letter, and at least 8 characters</p>
                </div>


                <div class="inputwrapper">
                    <label for="conpassword" class="newline">Confirm Password</label>
                    <input type="password" name="conPassword" id="conpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required
                    minlength="8" maxlength="12" placeholder="Confirm Your Password" required="required">
                </div>


                <div class="inputwrapper">
                    <label for="phone" class="newline">Phone</label>
            
                    <!-- <select name="phonecode" id="phonecode">
                        <option value="+91"> +91 </option>
                        <option value="+92"> +92 </option>
                        <option value="+93"> +93 </option>
                        <option value="+94"> +94 </option>
                        <option value="+95"> +95 </option>
                        <option value="+96"> +96 </option>
                        <option value="+97"> +97 </option>
                        <option value="+98"> +98 </option>
                        <option value="+99"> +99 </option>
                    </select> -->

                    <input type="text" name="Phone" id="phone" placeholder="Enter Your Mobile Number" value ="+91 " required maxlength="14" >
                </div>

                <div class="inputwrapper" id="recaptcha-container"></div>
            

                <div class="inputwrapper">
                <input type="button" value="Send OTP" class="submitotp" onclick="phoneAuth();">
                </div>

                <div class="inputwrapper">
                    <label for="otp" class="newline"></label>
                    <input type="text" name="OTP" id="otp" placeholder="Enter Your OTP" >
                </div>


                <div class="inputwrapper">
                <input type="button" value="Verify OTP" class="submitotp" onclick="codeVerify();">
                </div>

                <input type="button" value="Submit" class="submitbutton" onclick="createUser();">


            </form>

        </div>










<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.6.2/firebase.js"></script>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
   


  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
</script>

<!-- Javascript -->
<script>
    var password = document.getElementById("password");
    var eye = document.getElementById("eye");

    eye.addEventListener('click',togglePass);

    function togglePass () {
        eye.classList.toggle('active');

        (password.type == 'password') ? password.type = 'text' : password.type = 'password';
    }
</script>
<script src="Js/SignUp.js" type="text/javascript"></script>
<script src="Js/PhoneAuth.js" type="text/javascript"></script>
