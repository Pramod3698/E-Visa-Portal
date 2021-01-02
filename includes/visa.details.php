<?php

if (isset ($_POST['visa-submit'])) {
    require 'dbh.inc.php';

    $visatype = $_POST['visatype'];
    $countryvisit = $_POST['countryvisit'];
    $airportarrival = $_POST['airportarrival'];
    $arrivaldate = $_POST['arrivaldate'];                     
    $visaduration = $_POST['visaduration'];
    $airportdeparture = $_POST['airportdeparture'];
    $departuredate = $_POST['departuredate'];


    if (empty($visatype) || empty($countryvisit) || empty($airportarrival) || empty($arrivaldate) || empty($visaduration)|| empty($airportdeparture) || empty($departuredate) ) {
        header("Location: ../fill-application.php?error=emptyfields");
        exit();
    }

    
    else {
        
        $sql = "SELECT countryvisit FROM visadetails WHERE countryvisit=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../fill-application.php?error=sqlerror");
            exit();
        }

        

        else {
            $sql = "INSERT INTO visadetails (visatype, countryvisit, airportarrival, arrivaldate, visaduration, airportdeparture, departuredate) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../fill-application.php?error=sqlerror");
                    exit();
                }
                else {

                    mysqli_stmt_bind_param($stmt, "sssssss", $visatype, $countryvisit, $airportarrival, $arrivaldate, $visaduration, $airportdeparture, $departuredate);
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


