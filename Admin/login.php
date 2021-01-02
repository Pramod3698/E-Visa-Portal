<?php 
    require 'header.php'; 
?>



<div class="main2">

<!-- <span class='red'>*</span> -->


<?php 
    if (isset($_SESSION['uId'])) {
    echo '<form action="includes/logout.inc.php" method="POST" >
    <button type="submit" name="logout-submit" class="submitbutton">Logout</button>
    </form>';
    }
    else {
    echo '<h1> Login | <a href="signup.php"> Signup </a> </h1>
                    
    <form action="includes/login.inc.php" method="POST">
    <div class="inputwrapper">
    <label for="name" class="newline" > Name  </label>

    <input type="text" name="name" placeholder="Name" required pattern="\S+.*"/>
    </div>

    <div class="inputwrapper">
    <label for="password" class="newline"> Password </label>
    <input type="password" name="password" id="password" placeholder="Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
    <i class="material-icons" id="eye"> remove_red_eye </i>
    </div>

    <button type="submit" name="login-submit" class="submitbutton">Login</button>
    </form>';
    


           
    }
    ?>
    </div>








<?php include 'footer.php'; ?>


<!-- Javascript -->
<script src="Js/PasswordVisible.js" type="text/javascript"></script>