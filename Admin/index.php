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
        echo '<a class="btn-primary" href="tables.php" role="button">Tables</a>';
        }
        else {
        echo '<a class="btn-primary" href="login.php" role="button">Login</a>';
        }
    ?>


        </div>


    </main>


</div>



<?php include 'footer.php'; ?>


</body>
</html>