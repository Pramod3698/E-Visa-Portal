<?php require 'header.php' ?>

<body>
<header>
<a href="index.php">
    <img src="Images/globe-white.jpg" alt="Logo" width="65px" height="65px">  
</a>   
    <div class="logo"><span class="highlight"> E-VISA PROCESSING </span> & Follow Up System</div>
<nav>
<?php 
    if (isset($_SESSION['uId'])) {
        echo '<a href="application.php" class="mybutton">Application</a>';
    }
    else {
        echo '<a href="signup.php" class="active-mybutton">Signup</a>';
    }
    ?>
    <a href="about-evisa.php" class="mybutton">About E-Visa</a>
    <a href="faq.php" class="mybutton">FAQ</a>
</nav>
</header>


<div class="main2">

            <h1> Signup  | <a href="login.php"> Login </a></h1>

            <?php 
            if (isset($_GET['error'])) {
            if ($_GET['error'] == 'emptyfields') {
                echo "<p> Fill in all Fields! </p>" ;
            }
            else if ($_GET['error'] == 'invalidname') {
                echo '<p> Invalid Username </p>' ;
            }
            else if ($_GET['error'] == 'invalidemail') {
                echo '<p> Invalid E-Mail </p>' ;
            }
            else if ($_GET['error'] == 'passwordcheck') {
                echo '<p> Your Passwords do not match </p>' ;
            }
            else if ($_GET['error'] == 'useralreadyexists') {
                echo '<p> User already exists </p>' ;
            }
        }
        else if (isset($_GET['signup'])) {
            if ($_GET['signup'] == 'success') {
            echo '<center> <h3> Signup Successful, Login Now...! </h3> 
            </center>' ;
        }
    }
    ?>

            <form action="includes/signup.inc.php" method="POST">

                <div class="inputwrapper">
                    <label for="name" class="newline">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter Your Name" required="required" required pattern="\S+.*"/>
                </div>

                <div class="inputwrapper">
                    <label for="email" class="newline">Email</label>
                    <input type="email" name="email" placeholder="Enter Your Email" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}$">
                </div>

                <div class="inputwrapper">
                
                    <label for="password" class="newline">Password</label>
                    <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required
                     minlength="8" maxlength="18" placeholder="Enter Your Password" required="required">
                    <i class="material-icons" id="eye"> remove_red_eye </i>
                    <p>Must contain at least one number and one uppercase and lowercase letter, and at least 8 characters</p>
                </div>


                <div class="inputwrapper">
                    <label for="conpassword" class="newline">Confirm Password</label>
                    <input type="password" name="conpassword" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    minlength="8" maxlength="18" placeholder="Confirm Your Password" required="required" oninput="check(this)">
                    <script language='javascript' type='text/javascript'>
                    function check(input) {
                        if (input.value != document.getElementById('password').value) {
                             input.setCustomValidity('Password Must be Matching.');
                        } else {
                        // input is valid -- reset the error message
                            input.setCustomValidity('');
                        }
    }
</script>
                </div>



                <button type="submit" name="signup-submit" class="submitbutton">Signup</button>

            </form>

        </div>


<?php include 'footer.php'; ?>


<!-- Javascript -->
<script src="Js/PasswordVisible.js" type="text/javascript"></script>



