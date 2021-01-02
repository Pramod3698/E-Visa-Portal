<?php require 'header.php' ?>

<body>
<header>
<a href="index.php">
    <img src="Images/globe-white.jpg" alt="Logo" width="65px" height="65px">  
</a>    
    <div class="print"><span class="highlight">
    E-VISA PROCESSING</span> & Follow Up System</div>
<nav>
    <a href="application.php" class="active-mybutton">Application</a>
    <a href="about-evisa.php" class="mybutton">About E-Visa</a>
    <a href="faq.php" class="mybutton">FAQ</a>

    <?php 
    if (isset($_SESSION['uId'])) {
        echo "<a href='profile.php' class='mybutton' >Profile</a>";
    } 
    ?>
</nav>
</header>

<div class="main2">

<h1> E-VISA APPLICATION </h1>

<section>

<div class="steps">
            <div class="step1">
            <a href="fill-application.php">
                <i class="material-icons blue" >insert_drive_file</i>

            <h2> 1. Fill Application </h2>
            </a>
            </div>

            <div class="step2">
            <a href="application-print.php">
                <i class="material-icons blue">print</i>
                <h2> 2. Print Application </h2>
            </a>  
            </div>
            <a href="status.php">
            <div class="step3">
                <i class="material-icons blue">bookmarks</i>
                <h2> 3. Check Status </h2>
            </a>
            </div>
        </div>

</section>
</div>

<?php include 'footer.php'; ?>