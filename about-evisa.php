<?php require 'header.php'; ?>
<body>
<header>
<a href="index.php">
    <img src="Images/globe-white.jpg" alt="Logo" width="65px" height="65px">  
</a>   
        
<div class="logo"><span class="highlight">
        E-VISA PROCESSING</span> & Follow Up System</div>
<nav>
    <?php 
    if (isset($_SESSION['uId'])) {
        echo "<a href='application.php' class='mybutton'>Application</a>";
    }
    else {
        echo "<a href='signup.php' class='mybutton'>Signup</a>";
    }
    ?>
    <a href="about-evisa.php" class="active-mybutton">About E-Visa</a>
    <a href="faq.php" class="mybutton">FAQ</a>

    <?php 
    if (isset($_SESSION['uId'])) {
        echo "<a href='profile.php' class='mybutton' >Profile</a>";
    } 
    ?>
</nav>
</header>

<div class="about-us">

    <h1>About e-Visa</h1>


<div class="faq-group">
<p><span face="Times New Roman" size="3">Ministry of Foreign Affairs of has launched e-Visa portal allowing short-term visitors to get a visa in effortless way.</span></p>
<p><span face="Times New Roman" size="3">Prospective travelers have a possibility to obtain the short-term visa without visiting Embassy or Consular Office, following three simple steps: applying, making online payment and printing out ready e-Visa.</span></p>
<p><span face="Times New Roman" size="3">Applying for a visa through this portal has lots of advantages. No need to make an appointment or present original documents to the Embassy or Consular Office.</span></p>
<p><span face="Times New Roman" size="3">An e-Visa can be obtained easily anywhere with an internet connection and it grants the same right to enter n territory as ordinary sticker-visa in the passport.</span></p>
<p><span face="Times New Roman" size="3">All you need is internet connection, credit or debit card and scanned copies of your documents.</span></p>
<p><span face="Times New Roman" size="3">You must be able to present all the required documents at n state border</span></p>
<ul class="faq">
<li>
<p><b> • Travel Document/Passport</b></p>
</li>
<li>
<p><b> • Document proving purpose of travel</b></p>
</li>
<li>
<p><b> • Proof of accommodation</b></p>
</li>
<li>
<p><b> • Travel and health insurance</b></p>
</li>
<li>
<p><b> • Document proving sufficient financial means</b></p>
</li>
</ul>

</div>
</div>






<?php include 'footer.php'; ?>