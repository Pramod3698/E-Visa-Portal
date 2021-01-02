<?php require 'header.php'; ?>

<body>
<header>
<a href="index.php">
    <img src="Images/globe-white.jpg" alt="Logo" width="65px" height="65px">  
</a>    
    <div class="logo"><span class="highlight">
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

<div class="main4">


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
$evisa_status=$row['evisa_status'];
}
?>

<h1>Check Your E-Visa Status</h1>

<hr>
<table>
  <tr>
    <td><div align="right">Name :</div></td>
    <td><div align="left"><?php echo $name ?></div></td>
  </tr>
  <tr>
    <td><div align="right">Email :</div></td>
    <td><div align="left"><?php echo $email ?></div></td>
  </tr>
  <tr>
    <td><div align="right">Mobile No. :</div></td>
    <td><div align="left"><?php echo $phone ?></div></td>
  </tr>
  <tr>
    <td><div align="right">Status :</div></td>
    <td><div align="left"><?php if ($evisa_status == '0') {
      echo "Pending"; }
      else {
        echo "Approved";
      }
     ?></div></td>
  </tr>
  
</table>
</div>

<?php include 'footer.php'; ?>

