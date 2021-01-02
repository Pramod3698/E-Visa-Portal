<?php 
session_start();
include_once 'includes/dbh.inc.php';
$id=$_SESSION['uId'];
$sql = "SELECT name FROM users WHERE id='$id'";
$query_run = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($query_run))
{ 
$name = $row['name'];
}

    if (isset($_POST['submit'])) {
        $file = $_FILES['file'];

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));


        $allowed = array('pdf');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000) {
                    $fileNameNew = "Passport-".$name.".".$fileActualExt;

                    $fileDestination = 'uploads/'.$fileNameNew;

                    move_uploaded_file($fileTmpName, $fileDestination);

                    header("Location: fill-application.php?upload=success");
                }
                else {
                    echo '<script language="javascript">';
                    echo 'alert("Your File is Too Big!")'; 
                    echo '</script>';
                }
                
            }
            else {
                echo '<script language="javascript">';
                echo 'alert("There was an error uploading this file!")'; 
                echo '</script>';
            }
        }
        else {
                
                echo '<script language="javascript">';
                echo 'alert("You cannot upload files of this type!")'; 
                echo '</script>';
        }

    }
