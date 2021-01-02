<?php require 'header.php'; ?>

<div class="container">

    <main>
        
        <div class="col"> 
            <img src="Images/visa.jpg" alt="">
            <h1>E-VISA PORTAL</h1>
            <h2>One Stop Solution for</h2>
            <h3>applying Visa online </h3>

    <?php 
        if (isset($_SESSION['uId'])) {
        echo '<a class="btn-primary" href="application.php" role="button">Apply</a>';
        }
        else {
        echo '<a class="btn-primary" href="login.php" role="button">Login</a>';
        }
    ?>


        </div>


    </main>


</div>

<section>

<h1>Take only Three Steps</h1>
<div class="steps">
            <div class="step1">
                <i class="material-icons blue">insert_drive_file</i>
                <h2>Apply for e-Visa</h2>
            </div>
            <div class="step2">
                <i class="material-icons blue">payment</i>
                <h2>Proceed with payment</h2>  
            </div>
            <div class="step3">
                <i class="material-icons blue">bookmark</i>
                <h2>Receive your e-Visa</h2>
            </div>
        </div>

</section>



    



<?php include 'footer.php'; ?>


</body>
</html>