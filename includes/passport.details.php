<?php

if (isset ($_POST['passport-submit'])) {
    require 'dbh.inc.php';

    $passporttype = $_POST['passporttype'];
    $passportno = $_POST['passportno'];
    $placeofissue = $_POST['placeofissue'];
    $dateofissue = $_POST['dateofissue'];                     
    $dateofexpiry = $_POST['dateofexpiry'];


    if (empty($passporttype) || empty($passportno) || empty($placeofissue) || empty($dateofissue) || empty($dateofexpiry)) {
        header("Location: ../fill-application.php?error=emptyfields");
        exit();
    }

    
    else {
        
        $sql = "SELECT passportno FROM passportdetails WHERE passportno=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../fill-application.php?error=sqlerror");
            exit();
        }

        

        else {
            $sql = "INSERT INTO passportdetails (passporttype, passportno, placeofissue, dateofissue, dateofexpiry) VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../fill-application.php?error=sqlerror");
                    exit();
                }
                else {

                    mysqli_stmt_bind_param($stmt, "sssss", $passporttype, $passportno, $placeofissue, $dateofissue, $dateofexpiry);
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


