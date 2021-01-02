<?php

if (isset ($_POST['address-submit'])) {
    require 'dbh.inc.php';

    $houseno = $_POST['houseno'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];                                         
    $pincode = $_POST['pincode'];
    $mobile = $_POST['mobile'];                                      
    $email = $_POST['email'];
    $fathername = $_POST['fathername'];
    $mothername = $_POST['mothername'];

    if (empty($houseno) || empty($city) || empty($state) || empty($country) || empty($pincode) || empty($mobile) || empty($email)|| empty($fathername) || empty($mothername)) {
        header("Location: ../fill-application.php?error=emptyfields");
        exit();
    }

    
    else {
        
        $sql = "SELECT houseno FROM addressdetails WHERE houseno=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../application.php?error=sqlerror");
            exit();
        }

        

        else {
            $sql = "INSERT INTO addressdetails (houseno, city, state, country, pincode, mobile, email, fathername, mothername) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../fill-application.php?error=sqlerror");
                    exit();
                }
                else {

                    mysqli_stmt_bind_param($stmt, "sssssssss", $houseno, $city, $state, $country, $pincode, $mobile, $email, $fathername, $mothername);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../fill-application.php?details=saved");
                    exit();
                }
            }
    
}

    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}

else {
    header("Location: ../index.php");
    exit();
}


