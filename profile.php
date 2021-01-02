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
    <a href="about-evisa.php" class="mybutton">About E-Visa</a>
    <a href="faq.php" class="mybutton">FAQ</a>
    <a href="profile.php" class="active-mybutton" >Profile</a> 
</nav>
</header>

<div class="main3">


<?php
require_once('includes/dbh.inc.php');
$id=$_SESSION['uId'];
$result = "SELECT * FROM users WHERE id='$id'";
$query_run = mysqli_query($conn, $result);
while($row = mysqli_fetch_array($query_run))
{ 
$name=$row['name'];
$email=$row['email'];
$phone=$row['phone'];
}
?>

<h2> Your Profile Information </h2>

<table>
  <tr>
    <td width="82" valign="top"><div align="right">Name :</div></td>
    <td width="165" valign="top"><?php echo $name ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="right">Email :</div></td>
    <td valign="top"><?php echo $email ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="right">Mobile :</div></td>
    <td valign="top"><?php echo $phone ?></td>
  </tr>
  
</table>








<?php 
    if (isset($_SESSION['uId'])) {
    echo '<form action="includes/logout.inc.php" method="POST" >
    <button type="submit" name="logout-submit" class="submitbutton">Logout</button>
    </form>';
    }
?>


</div>


<?php include 'footer.php'; ?>