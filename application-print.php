<?php require 'header.php'; ?>
<head>
    <title>E-Visa Application</title>
</head>
<body>
<header1>
<a href="index.php">
    <img src="Images/globe-white.jpg" alt="Logo" width="65px" height="65px">  
</a>   
        
<div class="appprint"><span class="highlight">
        E-VISA APPLICATION FORM </span>
    </div>
</header1>

<div class="main3">


<?php
require_once('includes/dbh.inc.php');
$id=$_SESSION['uId'];
$result = "SELECT * FROM applicantdetails WHERE applicantid='$id'";
$query_run = mysqli_query($conn, $result);
while($row = mysqli_fetch_array($query_run))
{ 
$name=$row['name'];
$dob=$row['dob'];
$gender=$row['gender'];
$email=$row['email'];
$nationality=$row['nationality'];
$country=$row['country'];
$state=$row['state'];
$city=$row['city'];
$mobile=$row['mobile'];
}
?>

<h1> Applicant Information </h1>
<hr>
<table>
  <tr>
    <td><div align="right">Name :</div></td>
    <td><div align="left"><?php echo $name ?></div></td>
  </tr>
  <tr>
    <td><div align="right">Date Of Birth :</div></td>
    <td><div align="left"><?php echo $dob ?></div></td>
  </tr>
  <tr>
    <td><div align="right">Gender :</div></td>
    <td><div align="left"><?php echo $gender ?></div></td>
  </tr>
  <tr>
    <td><div align="right">Email :</div></td>
    <td><div align="left"><?php echo $email ?></div></td>
  </tr>
  <tr>
    <td><div align="right">Nationality :</div></td>
    <td><div align="left"><?php echo $nationality ?></div></td>
  </tr>
  <tr>
    <td><div align="right">Country :</div></td>
    <td><div align="left"><?php echo $country  ?></div></td>
  </tr>
  <tr>
    <td><div align="right">State :</div></td>
    <td><div align="left"><?php echo $state  ?></div></td>
  </tr>
  <tr>
    <td><div align="right">City :</div></td>
    <td><div align="left"><?php echo $city  ?></div></td>
  </tr>
  <tr>
    <td><div align="right">Mobile No. :</div></td>
    <td><div align="left"><?php echo $mobile ?></div></td>
  </tr>
  
</table>
<br>




<?php
require_once('includes/dbh.inc.php');
$id=$_SESSION['uId'];
$result = "SELECT * FROM passportdetails WHERE passportid='$id'";
$query_run = mysqli_query($conn, $result);
while($row = mysqli_fetch_array($query_run))
{ 
$passporttype=$row['passporttype'];
$passportno=$row['passportno'];
$placeofissue=$row['placeofissue'];
$dateofissue=$row['dateofissue'];
$dateofexpiry=$row['dateofexpiry'];
}
?>

<h1> Passport Information </h1>
<hr>
<table>
  <tr>
    <td><div align="right">Passport Type :</div></td>
    <td><div align="left"><?php echo $passporttype ?></div></td>
  </tr>
  <tr>
    <td><div align="right">Passport Number :</div></td>
    <td><div align="left"><?php echo $passportno ?></div></td>
  </tr>
  <tr>
    <td><div align="right">Place Of Issue :</div></td>
    <td><div align="left"><?php echo $placeofissue ?></div></td>
  </tr>
  <tr>
    <td><div align="right">Date Of Issue :</div></td>
    <td><div align="left"><?php echo $dateofissue ?></div></td>
  </tr>
  <tr>
    <td><div align="right">Date Of Expiry :</div></td>
    <td><div align="left"><?php echo $dateofexpiry ?></div></td>
  </tr>
</table>
<br>


<?php
require_once('includes/dbh.inc.php');
$id=$_SESSION['uId'];
$result = "SELECT * FROM visadetails WHERE visaid='$id'";
$query_run = mysqli_query($conn, $result);
while($row = mysqli_fetch_array($query_run))
{ 
$visatype=$row['visatype'];
$countryvisit=$row['countryvisit'];
$airportarrival=$row['airportarrival'];
$arrivaldate=$row['arrivaldate'];
$visaduration=$row['visaduration'];
$airportdeparture=$row['airportdeparture'];
$departuredate=$row['departuredate'];
}
?>

<h1> Visa Information </h1>
<hr>
<table>
  <tr>
    <td><div align="right">Type Of Visa :</div></td>
    <td><div align="left"><?php echo $visatype ?></div></td>
  </tr>
  <tr>
    <td><div align="right"> Country To Visit :</div></td>
    <td><div align="left"><?php echo $countryvisit ?></div></td>
  </tr>
  <tr>
    <td><div align="right">Airport Of Arrival :</div></td>
    <td><div align="left"><?php echo $airportarrival ?></div></td>
  </tr>
  <tr>
    <td><div align="right">Date Of Arrival :</div></td>
    <td><div align="left"><?php echo $arrivaldate ?></div></td>
  </tr>
  <tr>
    <td><div align="right">Duration of Visa :</div></td>
    <td><div align="left"><?php echo $visaduration ?></div></td>
  </tr>
  <tr>
    <td><div align="right">Airport Of Departure :</div></td>
    <td><div align="left"><?php echo $airportdeparture ?></div></td>
  </tr>
  <tr>
    <td><div align="right">Date Of Departure :</div></td>
    <td><div align="left"><?php echo $departuredate ?></div></td>
  </tr>
</table>
<br>



<?php
require_once('includes/dbh.inc.php');
$id=$_SESSION['uId'];
$result = "SELECT * FROM addressdetails WHERE addressid='$id'";
$query_run = mysqli_query($conn, $result);
while($row = mysqli_fetch_array($query_run))
{ 
$houseno=$row['houseno'];
$city=$row['city'];
$state=$row['state'];
$country=$row['country'];
$pincode=$row['pincode'];
$mobile=$row['mobile'];
$email=$row['email'];
$fathername=$row['fathername'];
$mothername=$row['mothername'];


}
?>

<h1> Applicant Address Information </h1>
<hr>
<table>
  <tr>
    <td><div align="right">House No. :</div></td>
    <td><div align="left"><?php echo $houseno ?></div></td>
  </tr>
  <tr>
    <td><div align="right">City :</div></td>
    <td><div align="left"><?php echo $city  ?></div></td>
  </tr>
  <tr>
    <td><div align="right">State :</div></td>
    <td><div align="left"><?php echo $state  ?></div></td>
  </tr>
  <tr>
    <td><div align="right">Country :</div></td>
    <td><div align="left"><?php echo $country  ?></div></td>
  </tr>
  <tr>
    <td><div align="right">Pincode :</div></td>
    <td><div align="left"><?php echo $pincode ?></div></td>
  </tr>
  <tr>
    <td><div align="right">Mobile No. :</div></td>
    <td><div align="left"><?php echo $mobile ?></div></td>
  </tr>
  <tr>
    <td><div align="right">Email :</div></td>
    <td><div align="left"><?php echo $email ?></div></td>
  </tr>
  <tr>
    <td><div align="right">Father Name :</div></td>
    <td><div align="left"><?php echo $fathername ?></div></td>
  </tr>
  <tr>
    <td><div align="right"> Mother Name :</div></td>
    <td><div align="left"><?php echo $mothername ?></div></td>
  </tr>

  
</table>
<br>

<button type="button" class="printbutton" onClick="window.print()"> Print Application </button>

<br>

</div>

